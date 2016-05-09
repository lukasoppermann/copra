<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/
/*
| Collection
*/
$factory->define(Tests\Models\Collection::class, function ($faker) {
    $name = 'Collection Name '.rand(1,100);
    return [
        'id' => $faker->uuid,
        'name' => $name,
        'slug' => str_replace(' ','-',$name),
    ];
});
/*
| Page
*/
$factory->define(Tests\Models\Page::class, function ($faker) {
    return [
        'id'                => $faker->uuid,
        'menu_label'        => $pageName = 'Page Name '.rand(1,100),
        'title'             => $faker->sentence(4),
        'description'       => $faker->paragraph(4),
        'slug'              => str_replace(' ','-',$pageName),
        'published'         => (int)$faker->boolean(80),
        'language'          => $faker->randomElement(['de', 'en'])
    ];
});

/*
| Fragments
*/
$factory->define(Tests\Models\Fragment::class, function ($faker) {
    return [
        'id' => $uuid = $faker->uuid,
        'type' => $faker->randomElement(['text', 'quote', 'image', 'video','collection']),
        'name' => (rand(0,1) === 1 ? 'Fragment Name '.rand(1,100) : null),
        'data' => $faker->paragraph(4),
    ];
});

$factory->defineAs(Tests\Models\Fragment::class, 'section', function ($faker) {
    return [
        'id' => $faker->uuid,
        'type' => 'section',
        'name' => (rand(0,1) === 1 ? 'Fragment Section Name '.rand(1,100) : null),
        'data' => null,
    ];
});

/*
| Image
*/
$factory->define(Tests\Models\Image::class, function ($faker) {
    $width = rand(200,2000);
    $height = rand(200,2000);
    return [
        'id'                => $faker->uuid,
        'link'              => $faker->imageUrl($width, $height, 'cats'),
        'slug'              => 'image-slug-'.rand(1,100),
        'bytesize'          => rand(2000,60000),
        'width'             => $width,
        'height'            => $height,
    ];
});

/*
| Meta
*/
$factory->define(Tests\Models\Metadetail::class, function ($faker) {
    $types = $faker->words(5);
    $value = $faker->sentence(4);
    if(rand(1,3) === 1 ){
        $value = [];
        for($i = rand(1,5); $i > 0; $i-- ){
            $value[$faker->word()] = $faker->word();
        }
         $value = json_encode($value);
    }

    return [
        'id'                => $faker->uuid,
        'type'              => $faker->randomElement($types),
        'value'             => $value,
    ];
});
