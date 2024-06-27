<?php

namespace Database\Factories;

use App\Models\Team;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Laravel\Jetstream\Features;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    //protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            
            'lastName' => fake()->lastName(),
            'firstName' => fake()->firstName(),
            'address' => fake()->address(),
            'phoneNumber' => fake()->phoneNumber(),
            'email' => fake()->unique()->safeEmail(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'remember_token' => Str::random(10),
           
        ];
    }
}

 /*   
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
             'email_verified_at' => null,
         ]);
    
     } */
    
    
     /* * Indicate that the user should have a personal team.
     */ 
//     public function withPersonalTeam(callable $callback = null): static
//     {
//         if (! Features::hasTeamFeatures()) {
//             return $this->state([]);
//         }

//         return $this->has(
//             Team::factory()
//                 ->state(fn (array $attributes, User $user) => [
//                     'name' => $user->name.'\'s Team',
//                     'user_id' => $user->id,
//                     'personal_team' => true,
//                 ])
//                 ->when(is_callable($callback), $callback),
//             'ownedTeams'
//         );
//     }
// }
