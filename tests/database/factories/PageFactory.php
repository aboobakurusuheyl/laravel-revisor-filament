<?php

declare(strict_types=1);

namespace Indra\RevisorFilament\Tests\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Indra\RevisorFilament\Tests\Models\Page;

/**
 * @extends Factory<Page>
 */
class PageFactory extends Factory
{
    protected $model = Page::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(),
        ];
    }
}
