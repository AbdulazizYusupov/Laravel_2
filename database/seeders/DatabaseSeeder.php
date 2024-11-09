<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\Group;
use App\Models\Permission;
use App\Models\Post;
use App\Models\Roles;
use App\Models\Student;
use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Route;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

//        User::factory()->create([
//            'name' => 'Test User',
//            'email' => 'test@example.com',
//        ]);
//        $role1 = Roles::create(['name' => 'admin']);
//        $role2 = Roles::create(['name' => 'car']);
//        $role3 = Roles::create(['name' => 'student']);
//        $role4 = Roles::create(['name' => 'post']);
//        for ($i = 0; $i < 50; $i++) {
//            Student::create([
//                'name' => 'Student ' . $i,
//                'phone' => '0123456789' . $i,
//                'address' => 'Address ' . $i,
//            ]);
//        }
//
//        for ($i = 0; $i < 50; $i++) {
//            Post::create([
//                'title' => 'Title ' . $i,
//                'body' => 'Body ' . $i,
//            ]);
//        }
//
//        for ($l = 0; $l < 50; $l++) {
//            Car::create([
//                'model' => 'Car ' . $l,
//                'color' => 'Color ' . $l,
//                'price' => $l + 1000,
//            ]);
//        }
//        $routes = Route::getRoutes();
//
//        foreach ($routes as $route) {
//
//            $key = $route->getName();
//
//            if ($key && !str_starts_with($key, 'generated::') && $key !== 'storage.local') {
//
//                $name = ucfirst(str_replace('.', '-', $key));
//
//                Permission::create([
//                    'group_id' => 2,
//                    'key' => $key,
//                    'name' => $name,
//                ]);
//            }
//        }
//        foreach (Roles::all() as $role) {
//            if ($role->name != 'admin') {
//                Group::create([
//                   'name' => $role->name,
//                ]);
//            }
//        }

//        $permissions = Permission::all()->pluck('id')->toArray();
//        foreach (Roles::all() as $role) {
//            $role->permissions()->attach($permissions);
//        }
    }
}
