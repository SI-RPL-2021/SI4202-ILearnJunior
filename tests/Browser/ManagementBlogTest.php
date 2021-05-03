<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use PharIo\Version\PreReleaseSuffix;
use Tests\DuskTestCase;

class ManagementBlogTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group managementblog
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Spirit of Learning')
                    ->click('a','GET STARTED')
                    ->visit('/login')
                    ->assertSee('Login')
                    ->type('email','aaa@mail.com')
                    ->type('password','1sampai10')
                    ->press('Login')
                    ->assertPathIs('/admin')
                    ->type('name_blog','Test Dusks')
                    ->type('content','Test Dusk kontens')
                    ->attach('thumbnail_blog', __DIR__ .'/Components/mecca.png')
                    ->press('Simpan Blog');
                    
        });
    }
}
