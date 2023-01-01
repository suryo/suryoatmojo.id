<?php

namespace Database\Seeders;

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
        $this->call(UserSeeder::class);
        $this->call(SliderSeeder::class);
        $this->call(SliderImageSeeder::class);
        $this->call(PersonalSeeder::class);
        $this->call(MapSeeder::class);
        $this->call(FooterSeeder::class);
        $this->call(StyleSeeder::class);
        $this->call(SectionSeeder::class);
        $this->call(SettingSeeder::class);
        $this->call(CategoriesSeeder::class);
        $this->call(SkillSeeder::class);
        $this->call(ExperienceSeeder::class);
        $this->call(TestimonialSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(ProjectCategorySeeder::class);
        $this->call(ProjectSeeder::class);
        $this->call(ProjectGallerySeeder::class);
        $this->call(BlogSeeder::class);
        $this->call(BlogGallerySeeder::class);
    }
}
