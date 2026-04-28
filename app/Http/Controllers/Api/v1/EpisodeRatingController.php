<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\Episode;
use App\Models\Rating;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class EpisodeRatingController extends Controller
{
    /**
     * Create a new rating via API.
     */
    public function store(Request $request, Episode $episode): JsonResponse
    {
        if (! $request->user()->tokenCan('ratings:create')) {
            return response()->json(['message' => 'Unauthorized'], 403);
        }

        $validated = $request->validate([
            'rating' => ['required', 'integer', 'between:1,5'],
        ]);

        if (
            Rating::where('user_id', $request->user()->id)
                ->where('episode_id', $episode->id)
                ->exists()
        ) {
            return response()->json([
                'message' => 'You already rated this episode'
            ], 409);
        }

        $rating = Rating::create([
            'user_id' => $request->user()->id,
            'episode_id' => $episode->id,
            'rating' => $validated['rating'],
        ]);

        return response()->json([
            'message' => 'Rating created',
            'rating' => $rating->rating,
        ], 201);
    }

    /**
     * Update an existing rating.
     */
    public function update(Request $request, Rating $rating): JsonResponse
    {
        if (! $request->user()->tokenCan('ratings:update')) {
            return response()->json(['message' => 'Unauthorized'], 403);
        }

        // Sécurité supplémentaire : l'utilisateur ne peut modifier que son vote
        if ($rating->user_id !== $request->user()->id) {
            return response()->json(['message' => 'Forbidden'], 403);
        }

        $validated = $request->validate([
            'rating' => ['required', 'integer', 'between:1,5'],
        ]);

        $rating->update([
            'rating' => $validated['rating'],
        ]);

        return response()->json([
            'message' => 'Rating updated',
            'rating' => $rating->rating,
        ]);
    }

    /**
     * Delete a rating.
     */
    public function destroy(Request $request, Rating $rating): JsonResponse
    {
        if (! $request->user()->tokenCan('ratings:delete')) {
            return response()->json(['message' => 'Unauthorized'], 403);
        }

        // Sécurité : uniquement le propriétaire du vote
        if ($rating->user_id !== $request->user()->id) {
            return response()->json(['message' => 'Forbidden'], 403);
        }

        $rating->delete();

        return response()->json([
            'message' => 'Rating deleted',
        ]);
    }
}
