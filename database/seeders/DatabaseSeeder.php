<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      //  User::truncate();
//        Category::truncate();
//        Product::truncate();
//
//        $Yousef=User::factory()->create([
//            'name'=>'Yousef',
//            'username'=>'yousef'
//        ]);
//        $Amer=User::factory()->create([
//            'name'=>'Amer',
//            'username'=>'amer'
//        ]);
//
//        $category=Category::factory()->create();
//        $category2=Category::factory()->create();
//
//
//        Product::factory(5)->create([
//            'user_id'=> $Yousef->id,
//            'category_id'=> $category->id
//
//        ]);
//        Product::factory(5)->create([
//            'user_id'=> $Amer->id,
//            'category_id'=> $category2->id
//
//        ]);
//


   //    \App\Models\User::factory(10)->create();

     //   $user =User::factory()->create();



     //    $clothes = Category::create([
    //        'name' => 'Clothes', 'slug'=> 'clothes',
      //  ]);
     //    $fruit= Category::create([
     //       'name' => 'Fruit', 'slug'=> 'fruit',
     //   ]);
     //    $dinking=Category::create([
    //        'name' => 'Drinking', 'slug'=> 'drinking',
   //     ]);        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


      //  Product::create([
     //      'title' => 'Jenes',
     //       'slug'=> 'jenes',
      //       'excerpt' => 'Lorem ipsum dolor sit amet,
      //       consectetur adipisicing elit. Accusamus
     //        assumenda distinctio omnis sequi voluptate. .',
     //       'body' => 'Lorem ipsum dolor sit amet,
     //        consectetur adipisicing elit. Accusamus
     //        assumenda distinctio omnis sequi voluptate',
      //      'category_id'=> $clothes->id,
      //      'user_id'=>$user->id,

     //   ]);
    //    Product::create([
      //      'title' => 'T-shirt',
     //       'slug'=> 't-shirt',
    //        'excerpt' => 'Lorem ipsum dolor sit amet,
     //        consectetur adipisicing elit. Accusamus
    //         assumenda distinctio omnis sequi voluptate. .',
    //        'body' => 'Lorem ipsum dolor sit amet,
    //         consectetur adipisicing elit. Accusamus
    //         assumenda distinctio omnis sequi voluptate',
    //        'category_id'=> $clothes->id,
    //        'user_id'=>$user->id,

   //     ]);
}
}

