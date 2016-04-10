<?php

use Illuminate\Database\Seeder;

class CauseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $causes = [
            'Meio ambiente',
            'Anaimais',
            'Elefantes',
            'Patrimonio Historico',
            'Crianas',
            'Ensino de Adultos'
        ]
        
        foreach ($causes as $$cause) {
            App\Cause:create(['cause'=>$cause])->save();
        }
    }
}
