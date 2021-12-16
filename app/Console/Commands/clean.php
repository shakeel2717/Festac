<?php

namespace App\Console\Commands;

use App\Models\Category;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Hash;

class clean extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:clean';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command to clean the data from database and cache';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        Artisan::call('migrate:fresh');
        Artisan::call('cache:clear');
        Artisan::call('config:clear');
        Artisan::call('view:clear');
        Artisan::call('route:clear');

        // creating a admin user
        $admin = new User();
        $admin->name = 'Admin';
        $admin->email = 'admin@admin.com';
        $admin->password = Hash::make('asdfasdf');
        $admin->role = 'admin';
        $admin->code = generate_user_code('A');
        $admin->save();

        // creating a user
        $user = new User();
        $user->name = 'User';
        $user->email = 'shakeel2717@gmail.com';
        $user->password = Hash::make('asdfasdf');
        $user->role = 'user';
        $user->code = generate_user_code('U');
        $user->save();

        // creating business cateogires
        $business_categories = array(
            'Accounting',
            'Advertising',
            'Agriculture',
            'Apparel & Accessories',
            'Automotive',
            'Banking',
            'Beauty & Cosmetics',
            'Biotechnology',
            'Business Services',
            'Construction',
            'Education',
            'Electronics',
            'Energy',
            'Entertainment',
            'Financial Services',
            'Food & Beverage',
            'Government',
            'Healthcare',
            'Insurance',
            'Legal',
            'Manufacturing',
            'Media',
            'Non-profit',
            'Real Estate',
            'Retail',
            'Technology',
            'Telecommunications',
            'Transportation',
            'Travel',
            'Other'
        );
        // storing this categories into category model
        foreach ($business_categories as $category) {
            $cat = new Category();
            $cat->value = $category;
            $cat->status = 'active';
            $cat->save();
        }

        // creating a seller
        $seller = new User();
        $seller->name = 'Seller';
        $seller->email = 'basharat@gmail.com';
        $seller->password = Hash::make('asdfasdf');
        $seller->role = 'seller';
        $seller->code = generate_user_code('S');
        $seller->save();
        
        return Command::SUCCESS;
    }
}
