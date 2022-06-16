<?php
use App\Game;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;


class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker as $faker)
    {
        //usiamo il seeder che genererà un finto db
        for ($i=0; $i < 20; $i++) {
            $new_game = new Game();
            $new_game->title = $faker->sentence(3);
            $new_game->description = $faker->sentence(3);
            $new_game->thumb = $faker->imageUrl(200,200,'animals',true,'games', true, 'jpg');
            $new_game->cover_image = $faker->imageUrl(200,200,'animals',true,'games', true, 'jpg');
            $new_game = save();




        }
    }
}
