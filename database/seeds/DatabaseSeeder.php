<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $this->call(PaisTableSeeder::class);
        $this->call(EstadoCivilTableSeeder::class);
        $this->call(EducacionTableSeeder::class);
        $this->call(OcupacionTableSeeder::class);
        $this->call(BeneficiarioTableSeeder::class);
        $this->call(TelefonoTableSeeder::class);
        $this->call(TutorTableSeeder::class);
        $this->call(RegistroSocialHogarTableSeeder::class);
        $this->call(TelefonoTableSeeder::class);
        $this->call(CredencialDiscapacidadTableSeeder::class);
        $this->call(FichaBeneficiarioTableSeeder::class);
        $this->call(IsapreTableSeeder::class);
        $this->call(FonasaTableSeeder::class);
        $this->call(OrganizacionSocialTableSeeder::class);
        $this->call(SistemaProteccionTableSeeder::class);
        $this->call(BeneficioTableSeeder::class);
        $this->call(TipoDependenciaTableSeeder::class);
        $this->call(FichaDiscapacidadTableSeeder::class);
        $this->call(TipoDiscapacidadTableSeeder::class);
        $this->call(DatoSocialTableSeeder::class);


        $this->call(KinesiologoTableSeeder::class);
        $this->call(AntecedentesMorbidosTableSeeder::class);
        $this->call(ValAutocuidadoTableSeeder::class);
        $this->call(ValComCogTableSeeder::class);
        $this->call(ValControlEsfinterTableSeeder::class);
        $this->call(ValDeambulacionTableSeeder::class);
        $this->call(ValEvaluacionTableSeeder::class);
        $this->call(ValMotoraTableSeeder::class);
        $this->call(ValMovilidadTableSeeder::class);
        $this->call(ValSensorialTableSeeder::class);
        $this->call(ValSocialTableSeeder::class);
        $this->call(FichaKinesiologiaTableSeeder::class);

    }
}
