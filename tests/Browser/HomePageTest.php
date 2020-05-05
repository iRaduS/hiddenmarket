<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;

class HomePageTest extends DuskTestCase
{
    /** @test */
    public function check_home_page_view()
    {
        $this->browse(function (Browser $browser) {

            $browser->loginAs(\App\User::find('5d4825a0-86fd-11ea-99cb-d9e7b0aae7fd'))
                    ->visit(route('home'))
                    ->assertSee('Welcome to HiddenMarket');
        });
    }
}
