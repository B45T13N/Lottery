<?php

namespace Tests\Feature;

use App\Models\Enum\PrizeEnum;
use App\Models\Participation;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Validation\Concerns\ReplacesAttributes;
use Tests\TestCase;

class ParticipationTest extends TestCase
{
    use RefreshDatabase;

    public function testUniqueEmailConstraint()
    {
        $existingEmail = 'test@example.com';
        Participation::factory()->create(['email' => $existingEmail]);

        $duplicateParticipation = Participation::factory()->make(['email' => $existingEmail]);

        $this->expectException(\Illuminate\Database\QueryException::class);

        $duplicateParticipation->save();
    }

    public function testProbabilityTesla()
    {
        $nbParticipations = 1000;
        $participations = Participation::factory($nbParticipations)->create();

        $gagnantsTesla = $participations->filter(function ($participation) {
            return $participation->prize === PrizeEnum::TESLA;
        });

        $probabilite = $gagnantsTesla->count() / $nbParticipations;

        $intervalleConfiance = 1.96 * sqrt($probabilite * (1 - $probabilite) / $nbParticipations);

        $probabiliteAttendue = 0.01;

        $this->assertGreaterThanOrEqual($probabiliteAttendue - $intervalleConfiance, $probabilite);
        $this->assertLessThanOrEqual($probabiliteAttendue + $intervalleConfiance, $probabilite);
    }

    public function testProbabilityWeekendMontagne()
    {
        $nbParticipations = 1000;

        $participations = Participation::factory($nbParticipations)->create();

        $gagnantsWeekendMontagne = $participations->filter(function ($participation) {
            return $participation->prize === PrizeEnum::WEEKEND_MONTAGNE;
        });

        $probabilite = $gagnantsWeekendMontagne->count() / $nbParticipations;

        $intervalleConfiance = 1.96 * sqrt($probabilite * (1 - $probabilite) / $nbParticipations);

        $probabiliteAttendue = 0.09;

        $this->assertGreaterThanOrEqual($probabiliteAttendue - $intervalleConfiance, $probabilite);
        $this->assertLessThanOrEqual($probabiliteAttendue + $intervalleConfiance, $probabilite);
    }

    public function testProbabilityJeuCartes()
    {
        $nbParticipations = 1000;

        $participations = Participation::factory($nbParticipations)->create();

        $gagnantsWeekendMontagne = $participations->filter(function ($participation) {
            return $participation->prize === PrizeEnum::JEU_CARTES;
        });

        $probabilite = $gagnantsWeekendMontagne->count() / $nbParticipations;

        $intervalleConfiance = 1.96 * sqrt($probabilite * (1 - $probabilite) / $nbParticipations);

        $probabiliteAttendue = 0.5;

        $this->assertGreaterThanOrEqual($probabiliteAttendue - $intervalleConfiance, $probabilite);
        $this->assertLessThanOrEqual($probabiliteAttendue + $intervalleConfiance, $probabilite);
    }

    public function testProbabilityPCGAMER()
    {
        $nbParticipations = 1000;

        $participations = Participation::factory($nbParticipations)->create();

        $gagnantsWeekendMontagne = $participations->filter(function ($participation) {
            return $participation->prize === PrizeEnum::PC_GAMER;
        });

        $probabilite = $gagnantsWeekendMontagne->count() / $nbParticipations;

        $intervalleConfiance = 1.96 * sqrt($probabilite * (1 - $probabilite) / $nbParticipations);

        $probabiliteAttendue = 0.3;

        $this->assertGreaterThanOrEqual($probabiliteAttendue - $intervalleConfiance, $probabilite);
        $this->assertLessThanOrEqual($probabiliteAttendue + $intervalleConfiance, $probabilite);
    }

    public function testProbabilityPS5()
    {
        $nbParticipations = 1000;

        $participations = Participation::factory($nbParticipations)->create();

        $gagnantsWeekendMontagne = $participations->filter(function ($participation) {
            return $participation->prize === PrizeEnum::PS5;
        });

        $probabilite = $gagnantsWeekendMontagne->count() / $nbParticipations;

        $intervalleConfiance = 1.96 * sqrt($probabilite * (1 - $probabilite) / $nbParticipations);

        $probabiliteAttendue = 0.1;

        $this->assertGreaterThanOrEqual($probabiliteAttendue - $intervalleConfiance, $probabilite);
        $this->assertLessThanOrEqual($probabiliteAttendue + $intervalleConfiance, $probabilite);
    }



}
