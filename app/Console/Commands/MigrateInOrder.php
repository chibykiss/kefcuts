<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class MigrateInOrder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:migrate-in-order';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Execute the Migration in the order i have specified here';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $migrations = [
            'database/migrations/2014_10_12_000000_create_users_table.php',
            'database/migrations/2014_10_12_100000_create_password_reset_tokens_table.php',
            'database/migrations/2019_08_19_000000_create_failed_jobs_table.php',
            'database/migrations/2019_12_14_000001_create_personal_access_tokens_table.php',
            'database/migrations/2023_12_01_160820_create_categories_table.php',
            'database/migrations/2023_12_01_160840_create_services_table.php',
            'database/migrations/2023_12_01_155905_create_times_table.php',
            'database/migrations/2023_12_01_155806_create_bookings_table.php',
            'database/migrations/2023_12_04_011550_create_booking_services_table.php',
            'database/migrations/2023_12_04_014409_add_columns_to_bookings_table.php'
        ];

        foreach($migrations as $migration)
        {        
            $migrationName = trim($migration);
            $path = $migrationName;
            $this->call('migrate:refresh', [
             '--path' => $path ,       
            ]);
        }

        $this->call('db:seed');
    }
}
