<?php

namespace Database\Seeders;

use App\Enums\Recipe\RecipeDiet;
use App\Enums\Recipe\RecipeTime;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecipesPLSeeder extends Seeder
{
    public function run()
    {
        $recipes = [
            [
                'name' => 'Kremowy Kurczak z Pieczarkami',
                'description' => 'Delikatne kawałki kurczaka w kremowym sosie z pieczarkami.',
                'instruction' => '1. Na patelni rozgrzej olej i zrumień kawałki kurczaka.
                      2. Dodaj posiekane pieczarki i smaż do zmiękczenia.
                      3. Wlej śmietankę i gotuj na małym ogniu przez 10 minut.
                      4. Dopraw solą, pieprzem i posyp posiekanym koperkiem.',
                'diet' => null,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'pierś z kurczaka', 'quantity' => 300],
                    ['name' => 'olej roślinny', 'quantity' => 30],
                    ['name' => 'pieczarki', 'quantity' => 200],
                    ['name' => 'śmietanka do kawy', 'quantity' => 200],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                    ['name' => 'koperek', 'quantity' => 10],
                ],
                'image_path' => 'recipes/creamy-chicken-mushrooms.jpg',
            ],
            [
                'name' => 'Sałatka z Grilowanym Łososiem',
                'description' => 'Klasyczna sałatka Cezar z dodatkiem soczystego grilowanego łososia.',
                'instruction' => '1. Griluj filet łososia przez 4 minuty z każdej strony.
                      2. Na talerzu ułóż sałatę, pokrojonego łososia, posyp parmezanem.
                      3. Polej sosem Cezar i udekoruj kawałkami grzanki.',
                'diet' => null,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'filet z łososia', 'quantity' => 150],
                    ['name' => 'ser parmezan', 'quantity' => 30],
                    ['name' => 'sałata', 'quantity' => 100],
                    ['name' => 'grzanki', 'quantity' => 50],
                ],
                'image_path' => 'recipes/caesar-salad-salmon.jpg',
            ],
            [
                'name' => 'Wegetariańskie Curry z Batatem',
                'description' => 'Pikantne wegetariańskie curry z batatem, ciecierzycą i szpinakiem.',
                'instruction' => '1. W garnku podsmaż czosnek i cebulę na oleju.
                      2. Dodaj pokrojonego w kostkę batata, ciecierzycę i przyprawy curry.
                      3. Wlej mleko kokosowe i gotuj do miękkości batata.
                      4. Na końcu dodaj szpinak i gotuj jeszcze 3 minuty.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::LONG,
                'ingredients' => [
                    ['name' => 'batat', 'quantity' => 200],
                    ['name' => 'ciecierzyca', 'quantity' => 150],
                    ['name' => 'szpinak', 'quantity' => 100],
                    ['name' => 'mleko', 'quantity' => 200],
                    ['name' => 'olej roślinny', 'quantity' => 30],
                    ['name' => 'czosnek', 'quantity' => 10],
                ],
                'image_path' => 'recipes/vegetarian-curry-sweet-potato.jpg',
            ],
            [
                'name' => 'Makaron Penne z Sosem Serowym',
                'description' => 'Kremowy makaron penne w bogatym sosie serowym.',
                'instruction' => '1. Ugotuj makaron penne al dente.
                      2. Na patelni rozpuść masło, dodaj śmietanę i ser, mieszając do uzyskania gładkiego sosu.
                      3. Dodaj ugotowany makaron do sosu, mieszaj i podawaj z posiekaną bazylią.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'penne', 'quantity' => 200],
                    ['name' => 'masło', 'quantity' => 30],
                    ['name' => 'śmietana kremówka', 'quantity' => 100],
                    ['name' => 'ser', 'quantity' => 50],
                    ['name' => 'bazylia', 'quantity' => 5],
                ],
                'image_path' => 'recipes/penne-cheese-sauce.jpg',
            ],
            [
                'name' => 'Pieczona Kaczka z Jabłkami',
                'description' => 'Soczysta pieczona kaczka z jabłkami i ziołami.',
                'instruction' => '1. Kaczkę natrzyj solą, pieprzem i ziołami.
                      2. Włóż do środka pokrojone jabłka.
                      3. Piecz w piekarniku przez 1,5 godziny w temperaturze 180°C.
                      4. Podawaj z pieczonymi jabłkami i sosie z pieczenia.',
                'diet' => null,
                'time' => RecipeTime::LONG,
                'ingredients' => [
                    ['name' => 'kaczka', 'quantity' => 1000],
                    ['name' => 'jabłko', 'quantity' => 2],
                    ['name' => 'sól', 'quantity' => 10],
                    ['name' => 'pieprz', 'quantity' => 5],
                    ['name' => 'rozmaryn', 'quantity' => 5],
                    ['name' => 'tymianek', 'quantity' => 5],
                ],
                'image_path' => 'recipes/roasted-duck-apples.jpg',
            ],
            [
                'name' => 'Omlet z Serem i Szpinakiem',
                'description' => 'Puszysty omlet z serem, świeżym szpinakiem i cebulą.',
                'instruction' => '1. Roztrzep jajka w misce, dodaj posiekany szpinak i cebulę.
                      2. Na patelni rozgrzej masło i wlej masę jajeczną.
                      3. Posyp startym serem i smaż na małym ogniu do zastygnięcia.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'jajko', 'quantity' => 2],
                    ['name' => 'ser', 'quantity' => 30],
                    ['name' => 'szpinak', 'quantity' => 50],
                    ['name' => 'cebula', 'quantity' => 1],
                    ['name' => 'masło', 'quantity' => 10],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/spinach-cheese-omelette.jpg',
            ],
            [
                'name' => 'Koktajl Truskawkowy z Bananem',
                'description' => 'Orzeźwiający koktajl z truskawkami, bananem i jogurtem.',
                'instruction' => '1. W blenderze połącz truskawki, banana, jogurt i miód.
                      2. Miksuj do uzyskania gładkiego koktajlu.
                      3. Podawaj schłodzone z plasterkiem pomarańczy.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'truskawka', 'quantity' => 20],
                    ['name' => 'banan', 'quantity' => 1],
                    ['name' => 'jogurt', 'quantity' => 150],
                    ['name' => 'miód', 'quantity' => 10],
                    ['name' => 'pomarańcza', 'quantity' => 1],
                ],
                'image_path' => 'recipes/strawberry-banana-smoothie.jpg',
            ],
            [
                'name' => 'Sałatka Grecka',
                'description' => 'Klasyczna sałatka grecka z pomidorem, ogórkiem, oliwkami i fetą.',
                'instruction' => '1. Pokrój pomidory, ogórki i cebulę.
                      2. Dodaj oliwki i pokruszoną fetę.
                      3. Skrop oliwą z oliwek, dopraw solą i pieprzem.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'pomidor', 'quantity' => 2],
                    ['name' => 'ogórek', 'quantity' => 1],
                    ['name' => 'cebula', 'quantity' => 1],
                    ['name' => 'oliwki', 'quantity' => 30],
                    ['name' => 'ser feta', 'quantity' => 30],
                    ['name' => 'oliwa z oliwek', 'quantity' => 15],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/greek-salad.jpg',
            ],
            [
                'name' => 'Kremowa Zupa Brokułowa',
                'description' => 'Delikatna zupa kremowa z soczystym brokułem i serem parmezan.',
                'instruction' => '1. Gotuj brokuły na parze do miękkości.
                      2. Rozblenduj je z gorącym mlekiem i serem parmezan.
                      3. Dopraw solą i pieprzem, podawaj z grzankami.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'brokuł', 'quantity' => 1],
                    ['name' => 'mleko', 'quantity' => 200],
                    ['name' => 'ser parmezan', 'quantity' => 30],
                    ['name' => 'grzanki', 'quantity' => 50],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/cream-of-broccoli-soup.jpg',
            ],
            [
                'name' => 'Kotlety Schabowe',
                'description' => 'Tradycyjne kotlety schabowe smażone na maśle klarowanym.',
                'instruction' => '1. Rozbij kotlety schabowe, dopraw solą i pieprzem.
                      2. Obtocz w mące, jajku i bułce tartej.
                      3. Smaż na maśle klarowanym z obu stron do zarumienienia.',
                'diet' => null,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'kotlet schabowy', 'quantity' => 2],
                    ['name' => 'masło', 'quantity' => 30],
                    ['name' => 'mąka', 'quantity' => 30],
                    ['name' => 'jajko', 'quantity' => 1],
                    ['name' => 'bułka tarta', 'quantity' => 30],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/pork-cutlets.jpg',
            ],
            [
                'name' => 'Sałatka z Komosą Ryżową',
                'description' => 'Zdrowa sałatka z komosą ryżową, pieczonymi warzywami i sosem jogurtowym.',
                'instruction' => '1. Ugotuj komosę ryżową według instrukcji na opakowaniu.
                      2. Piecz warzywa (np. batata, paprykę, cukinię) z odrobiną oliwy.
                      3. Połącz komosę ryżową, warzywa.
                      4. Skrop sosem jogurtowym i podawaj.',
                'diet' => RecipeDiet::VEGAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'komosa ryżowa', 'quantity' => 100],
                    ['name' => 'batat', 'quantity' => 1],
                    ['name' => 'papryka', 'quantity' => 1],
                    ['name' => 'cukinia', 'quantity' => 1],
                    ['name' => 'oliwa z oliwek', 'quantity' => 15],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                    ['name' => 'jogurt', 'quantity' => 30],
                ],
                'image_path' => 'recipes/quinoa-veggie-salad.jpg',
            ],
            [
                'name' => 'Krem z Dyni',
                'description' => 'Delikatny krem z dyni z nutą cynamonu i orzechów.',
                'instruction' => '1. Upiecz kawałki dyni w piekarniku.
                      2. Rozblenduj dynię z ciepłym mlekiem roślinnym.
                      3. Dodaj cynamon, orzechy i sól. Podawaj gorący.',
                'diet' => RecipeDiet::VEGAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'dynia', 'quantity' => 200],
                    ['name' => 'mleko owsiane', 'quantity' => 200],
                    ['name' => 'cynamon', 'quantity' => 5],
                    ['name' => 'orzechy włoskie', 'quantity' => 10],
                    ['name' => 'sól', 'quantity' => 5],
                ],
                'image_path' => 'recipes/pumpkin-soup.jpg',
            ],
            [
                'name' => 'Kasza Jaglana z Warzywami',
                'description' => 'Kasza jaglana z duszonymi warzywami i sosie pomidorowym.',
                'instruction' => '1. Ugotuj kaszę jaglaną zgodnie z instrukcją.
                      2. Podsmaż cebulę i czosnek, dodaj pokrojone warzywa (np. cukinię, paprykę).
                      3. Dodaj sos pomidorowy i dusz warzywa.
                      4. Podawaj z ugotowaną kaszą.',
                'diet' => RecipeDiet::VEGAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'kasza jaglana', 'quantity' => 100],
                    ['name' => 'cebula', 'quantity' => 1],
                    ['name' => 'czosnek', 'quantity' => 2],
                    ['name' => 'cukinia', 'quantity' => 1],
                    ['name' => 'papryka', 'quantity' => 1],
                    ['name' => 'pomidor', 'quantity' => 2],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/buckwheat-vegetable-stir-fry.jpg',
            ],
            [
                'name' => 'XYZ Kasza Jaglana z Warzywami',
                'description' => 'Kasza jaglana z duszonymi warzywami i sosie pomidorowym.',
                'instruction' => '1. Ugotuj kaszę jaglaną zgodnie z instrukcją.
                      2. Podsmaż cebulę i czosnek, dodaj pokrojone warzywa (np. cukinię, paprykę).
                      3. Dodaj sos pomidorowy i dusz warzywa.
                      4. Podawaj z ugotowaną kaszą.',
                'diet' => RecipeDiet::VEGAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'kasza jaglana', 'quantity' => 100],
                    ['name' => 'cebula', 'quantity' => 1],
                    ['name' => 'czosnek', 'quantity' => 2],
                    ['name' => 'cukinia', 'quantity' => 1],
                    ['name' => 'papryka', 'quantity' => 1],
                    ['name' => 'pomidor', 'quantity' => 2],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/buckwheat-vegetable-stir-fry.jpg',
            ],
            [
                'name' => 'XYZ Kremowy Kurczak z Pieczarkami',
                'description' => 'Delikatne kawałki kurczaka w kremowym sosie z pieczarkami.',
                'instruction' => '1. Na patelni rozgrzej olej i zrumień kawałki kurczaka.
                      2. Dodaj posiekane pieczarki i smaż do zmiękczenia.
                      3. Wlej śmietankę i gotuj na małym ogniu przez 10 minut.
                      4. Dopraw solą, pieprzem i posyp posiekanym koperkiem.',
                'diet' => null,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'pierś z kurczaka', 'quantity' => 300],
                    ['name' => 'olej roślinny', 'quantity' => 30],
                    ['name' => 'pieczarki', 'quantity' => 200],
                    ['name' => 'śmietanka do kawy', 'quantity' => 200],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                    ['name' => 'koperek', 'quantity' => 10],
                ],
                'image_path' => 'recipes/creamy-chicken-mushrooms.jpg',
            ],
            [
                'name' => 'XYZ Sałatka z Grilowanym Łososiem',
                'description' => 'Klasyczna sałatka Cezar z dodatkiem soczystego grilowanego łososia.',
                'instruction' => '1. Griluj filet łososia przez 4 minuty z każdej strony.
                      2. Na talerzu ułóż sałatę, pokrojonego łososia, posyp parmezanem.
                      3. Polej sosem Cezar i udekoruj kawałkami grzanki.',
                'diet' => null,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'filet z łososia', 'quantity' => 150],
                    ['name' => 'ser parmezan', 'quantity' => 30],
                    ['name' => 'sałata', 'quantity' => 100],
                    ['name' => 'grzanki', 'quantity' => 50],
                ],
                'image_path' => 'recipes/caesar-salad-salmon.jpg',
            ],
            [
                'name' => 'XYZ Wegetariańskie Curry z Batatem',
                'description' => 'Pikantne wegetariańskie curry z batatem, ciecierzycą i szpinakiem.',
                'instruction' => '1. W garnku podsmaż czosnek i cebulę na oleju.
                      2. Dodaj pokrojonego w kostkę batata, ciecierzycę i przyprawy curry.
                      3. Wlej mleko kokosowe i gotuj do miękkości batata.
                      4. Na końcu dodaj szpinak i gotuj jeszcze 3 minuty.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::LONG,
                'ingredients' => [
                    ['name' => 'batat', 'quantity' => 200],
                    ['name' => 'ciecierzyca', 'quantity' => 150],
                    ['name' => 'szpinak', 'quantity' => 100],
                    ['name' => 'mleko', 'quantity' => 200],
                    ['name' => 'olej roślinny', 'quantity' => 30],
                    ['name' => 'czosnek', 'quantity' => 10],
                ],
                'image_path' => 'recipes/vegetarian-curry-sweet-potato.jpg',
            ],
            [
                'name' => 'XYZ Makaron Penne z Sosem Serowym',
                'description' => 'Kremowy makaron penne w bogatym sosie serowym.',
                'instruction' => '1. Ugotuj makaron penne al dente.
                      2. Na patelni rozpuść masło, dodaj śmietanę i ser, mieszając do uzyskania gładkiego sosu.
                      3. Dodaj ugotowany makaron do sosu, mieszaj i podawaj z posiekaną bazylią.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'penne', 'quantity' => 200],
                    ['name' => 'masło', 'quantity' => 30],
                    ['name' => 'śmietana kremówka', 'quantity' => 100],
                    ['name' => 'ser', 'quantity' => 50],
                    ['name' => 'bazylia', 'quantity' => 5],
                ],
                'image_path' => 'recipes/penne-cheese-sauce.jpg',
            ],
            [
                'name' => 'XYZ Pieczona Kaczka z Jabłkami',
                'description' => 'Soczysta pieczona kaczka z jabłkami i ziołami.',
                'instruction' => '1. Kaczkę natrzyj solą, pieprzem i ziołami.
                      2. Włóż do środka pokrojone jabłka.
                      3. Piecz w piekarniku przez 1,5 godziny w temperaturze 180°C.
                      4. Podawaj z pieczonymi jabłkami i sosie z pieczenia.',
                'diet' => null,
                'time' => RecipeTime::LONG,
                'ingredients' => [
                    ['name' => 'kaczka', 'quantity' => 1000],
                    ['name' => 'jabłko', 'quantity' => 2],
                    ['name' => 'sól', 'quantity' => 10],
                    ['name' => 'pieprz', 'quantity' => 5],
                    ['name' => 'rozmaryn', 'quantity' => 5],
                    ['name' => 'tymianek', 'quantity' => 5],
                ],
                'image_path' => 'recipes/roasted-duck-apples.jpg',
            ],
            [
                'name' => 'XYZ Omlet z Serem i Szpinakiem',
                'description' => 'Puszysty omlet z serem, świeżym szpinakiem i cebulą.',
                'instruction' => '1. Roztrzep jajka w misce, dodaj posiekany szpinak i cebulę.
                      2. Na patelni rozgrzej masło i wlej masę jajeczną.
                      3. Posyp startym serem i smaż na małym ogniu do zastygnięcia.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'jajko', 'quantity' => 2],
                    ['name' => 'ser', 'quantity' => 30],
                    ['name' => 'szpinak', 'quantity' => 50],
                    ['name' => 'cebula', 'quantity' => 1],
                    ['name' => 'masło', 'quantity' => 10],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/spinach-cheese-omelette.jpg',
            ],
            [
                'name' => 'XYZ Koktajl Truskawkowy z Bananem',
                'description' => 'Orzeźwiający koktajl z truskawkami, bananem i jogurtem.',
                'instruction' => '1. W blenderze połącz truskawki, banana, jogurt i miód.
                      2. Miksuj do uzyskania gładkiego koktajlu.
                      3. Podawaj schłodzone z plasterkiem pomarańczy.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'truskawka', 'quantity' => 20],
                    ['name' => 'banan', 'quantity' => 1],
                    ['name' => 'jogurt', 'quantity' => 150],
                    ['name' => 'miód', 'quantity' => 10],
                    ['name' => 'pomarańcza', 'quantity' => 1],
                ],
                'image_path' => 'recipes/strawberry-banana-smoothie.jpg',
            ],
            [
                'name' => 'XYZ Sałatka Grecka',
                'description' => 'Klasyczna sałatka grecka z pomidorem, ogórkiem, oliwkami i fetą.',
                'instruction' => '1. Pokrój pomidory, ogórki i cebulę.
                      2. Dodaj oliwki i pokruszoną fetę.
                      3. Skrop oliwą z oliwek, dopraw solą i pieprzem.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'pomidor', 'quantity' => 2],
                    ['name' => 'ogórek', 'quantity' => 1],
                    ['name' => 'cebula', 'quantity' => 1],
                    ['name' => 'oliwki', 'quantity' => 30],
                    ['name' => 'ser feta', 'quantity' => 30],
                    ['name' => 'oliwa z oliwek', 'quantity' => 15],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/greek-salad.jpg',
            ],
            [
                'name' => 'XYZ Kremowa Zupa Brokułowa',
                'description' => 'Delikatna zupa kremowa z soczystym brokułem i serem parmezan.',
                'instruction' => '1. Gotuj brokuły na parze do miękkości.
                      2. Rozblenduj je z gorącym mlekiem i serem parmezan.
                      3. Dopraw solą i pieprzem, podawaj z grzankami.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'brokuł', 'quantity' => 1],
                    ['name' => 'mleko', 'quantity' => 200],
                    ['name' => 'ser parmezan', 'quantity' => 30],
                    ['name' => 'grzanki', 'quantity' => 50],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/cream-of-broccoli-soup.jpg',
            ],
            [
                'name' => 'XYZ Kotlety Schabowe',
                'description' => 'Tradycyjne kotlety schabowe smażone na maśle klarowanym.',
                'instruction' => '1. Rozbij kotlety schabowe, dopraw solą i pieprzem.
                      2. Obtocz w mące, jajku i bułce tartej.
                      3. Smaż na maśle klarowanym z obu stron do zarumienienia.',
                'diet' => null,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'kotlet schabowy', 'quantity' => 2],
                    ['name' => 'masło', 'quantity' => 30],
                    ['name' => 'mąka', 'quantity' => 30],
                    ['name' => 'jajko', 'quantity' => 1],
                    ['name' => 'bułka tarta', 'quantity' => 30],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/pork-cutlets.jpg',
            ],
            [
                'name' => 'XYZ Sałatka z Komosą Ryżową',
                'description' => 'Zdrowa sałatka z komosą ryżową, pieczonymi warzywami i sosem jogurtowym.',
                'instruction' => '1. Ugotuj komosę ryżową według instrukcji na opakowaniu.
                      2. Piecz warzywa (np. batata, paprykę, cukinię) z odrobiną oliwy.
                      3. Połącz komosę ryżową, warzywa.
                      4. Skrop sosem jogurtowym i podawaj.',
                'diet' => RecipeDiet::VEGAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'komosa ryżowa', 'quantity' => 100],
                    ['name' => 'batat', 'quantity' => 1],
                    ['name' => 'papryka', 'quantity' => 1],
                    ['name' => 'cukinia', 'quantity' => 1],
                    ['name' => 'oliwa z oliwek', 'quantity' => 15],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                    ['name' => 'jogurt', 'quantity' => 30],
                ],
                'image_path' => 'recipes/quinoa-veggie-salad.jpg',
            ],
            [
                'name' => 'XYZ Krem z Dyni',
                'description' => 'Delikatny krem z dyni z nutą cynamonu i orzechów.',
                'instruction' => '1. Upiecz kawałki dyni w piekarniku.
                      2. Rozblenduj dynię z ciepłym mlekiem roślinnym.
                      3. Dodaj cynamon, orzechy i sól. Podawaj gorący.',
                'diet' => RecipeDiet::VEGAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'dynia', 'quantity' => 200],
                    ['name' => 'mleko owsiane', 'quantity' => 200],
                    ['name' => 'cynamon', 'quantity' => 5],
                    ['name' => 'orzechy włoskie', 'quantity' => 10],
                    ['name' => 'sól', 'quantity' => 5],
                ],
                'image_path' => 'recipes/pumpkin-soup.jpg',
            ],
            [
                'name' => 'ABC1 Kasza Jaglana z Warzywami',
                'description' => 'Kasza jaglana z duszonymi warzywami i sosie pomidorowym.',
                'instruction' => '1. Ugotuj kaszę jaglaną zgodnie z instrukcją.
                      2. Podsmaż cebulę i czosnek, dodaj pokrojone warzywa (np. cukinię, paprykę).
                      3. Dodaj sos pomidorowy i dusz warzywa.
                      4. Podawaj z ugotowaną kaszą.',
                'diet' => RecipeDiet::VEGAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'kasza jaglana', 'quantity' => 100],
                    ['name' => 'cebula', 'quantity' => 1],
                    ['name' => 'czosnek', 'quantity' => 2],
                    ['name' => 'cukinia', 'quantity' => 1],
                    ['name' => 'papryka', 'quantity' => 1],
                    ['name' => 'pomidor', 'quantity' => 2],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/buckwheat-vegetable-stir-fry.jpg',
            ],
            [
                'name' => 'ABC1 Kremowy Kurczak z Pieczarkami',
                'description' => 'Delikatne kawałki kurczaka w kremowym sosie z pieczarkami.',
                'instruction' => '1. Na patelni rozgrzej olej i zrumień kawałki kurczaka.
                      2. Dodaj posiekane pieczarki i smaż do zmiękczenia.
                      3. Wlej śmietankę i gotuj na małym ogniu przez 10 minut.
                      4. Dopraw solą, pieprzem i posyp posiekanym koperkiem.',
                'diet' => null,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'pierś z kurczaka', 'quantity' => 300],
                    ['name' => 'olej roślinny', 'quantity' => 30],
                    ['name' => 'pieczarki', 'quantity' => 200],
                    ['name' => 'śmietanka do kawy', 'quantity' => 200],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                    ['name' => 'koperek', 'quantity' => 10],
                ],
                'image_path' => 'recipes/creamy-chicken-mushrooms.jpg',
            ],
            [
                'name' => 'ABC1 Sałatka z Grilowanym Łososiem',
                'description' => 'Klasyczna sałatka Cezar z dodatkiem soczystego grilowanego łososia.',
                'instruction' => '1. Griluj filet łososia przez 4 minuty z każdej strony.
                      2. Na talerzu ułóż sałatę, pokrojonego łososia, posyp parmezanem.
                      3. Polej sosem Cezar i udekoruj kawałkami grzanki.',
                'diet' => null,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'filet z łososia', 'quantity' => 150],
                    ['name' => 'ser parmezan', 'quantity' => 30],
                    ['name' => 'sałata', 'quantity' => 100],
                    ['name' => 'grzanki', 'quantity' => 50],
                ],
                'image_path' => 'recipes/caesar-salad-salmon.jpg',
            ],
            [
                'name' => 'ABC1 Wegetariańskie Curry z Batatem',
                'description' => 'Pikantne wegetariańskie curry z batatem, ciecierzycą i szpinakiem.',
                'instruction' => '1. W garnku podsmaż czosnek i cebulę na oleju.
                      2. Dodaj pokrojonego w kostkę batata, ciecierzycę i przyprawy curry.
                      3. Wlej mleko kokosowe i gotuj do miękkości batata.
                      4. Na końcu dodaj szpinak i gotuj jeszcze 3 minuty.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::LONG,
                'ingredients' => [
                    ['name' => 'batat', 'quantity' => 200],
                    ['name' => 'ciecierzyca', 'quantity' => 150],
                    ['name' => 'szpinak', 'quantity' => 100],
                    ['name' => 'mleko', 'quantity' => 200],
                    ['name' => 'olej roślinny', 'quantity' => 30],
                    ['name' => 'czosnek', 'quantity' => 10],
                ],
                'image_path' => 'recipes/vegetarian-curry-sweet-potato.jpg',
            ],
            [
                'name' => 'ABC1 Makaron Penne z Sosem Serowym',
                'description' => 'Kremowy makaron penne w bogatym sosie serowym.',
                'instruction' => '1. Ugotuj makaron penne al dente.
                      2. Na patelni rozpuść masło, dodaj śmietanę i ser, mieszając do uzyskania gładkiego sosu.
                      3. Dodaj ugotowany makaron do sosu, mieszaj i podawaj z posiekaną bazylią.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'penne', 'quantity' => 200],
                    ['name' => 'masło', 'quantity' => 30],
                    ['name' => 'śmietana kremówka', 'quantity' => 100],
                    ['name' => 'ser', 'quantity' => 50],
                    ['name' => 'bazylia', 'quantity' => 5],
                ],
                'image_path' => 'recipes/penne-cheese-sauce.jpg',
            ],
            [
                'name' => 'ABC1 Pieczona Kaczka z Jabłkami',
                'description' => 'Soczysta pieczona kaczka z jabłkami i ziołami.',
                'instruction' => '1. Kaczkę natrzyj solą, pieprzem i ziołami.
                      2. Włóż do środka pokrojone jabłka.
                      3. Piecz w piekarniku przez 1,5 godziny w temperaturze 180°C.
                      4. Podawaj z pieczonymi jabłkami i sosie z pieczenia.',
                'diet' => null,
                'time' => RecipeTime::LONG,
                'ingredients' => [
                    ['name' => 'kaczka', 'quantity' => 1000],
                    ['name' => 'jabłko', 'quantity' => 2],
                    ['name' => 'sól', 'quantity' => 10],
                    ['name' => 'pieprz', 'quantity' => 5],
                    ['name' => 'rozmaryn', 'quantity' => 5],
                    ['name' => 'tymianek', 'quantity' => 5],
                ],
                'image_path' => 'recipes/roasted-duck-apples.jpg',
            ],
            [
                'name' => 'ABC1 Omlet z Serem i Szpinakiem',
                'description' => 'Puszysty omlet z serem, świeżym szpinakiem i cebulą.',
                'instruction' => '1. Roztrzep jajka w misce, dodaj posiekany szpinak i cebulę.
                      2. Na patelni rozgrzej masło i wlej masę jajeczną.
                      3. Posyp startym serem i smaż na małym ogniu do zastygnięcia.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'jajko', 'quantity' => 2],
                    ['name' => 'ser', 'quantity' => 30],
                    ['name' => 'szpinak', 'quantity' => 50],
                    ['name' => 'cebula', 'quantity' => 1],
                    ['name' => 'masło', 'quantity' => 10],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/spinach-cheese-omelette.jpg',
            ],
            [
                'name' => 'ABC1 Koktajl Truskawkowy z Bananem',
                'description' => 'Orzeźwiający koktajl z truskawkami, bananem i jogurtem.',
                'instruction' => '1. W blenderze połącz truskawki, banana, jogurt i miód.
                      2. Miksuj do uzyskania gładkiego koktajlu.
                      3. Podawaj schłodzone z plasterkiem pomarańczy.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'truskawka', 'quantity' => 20],
                    ['name' => 'banan', 'quantity' => 1],
                    ['name' => 'jogurt', 'quantity' => 150],
                    ['name' => 'miód', 'quantity' => 10],
                    ['name' => 'pomarańcza', 'quantity' => 1],
                ],
                'image_path' => 'recipes/strawberry-banana-smoothie.jpg',
            ],
            [
                'name' => 'ABC1 Sałatka Grecka',
                'description' => 'Klasyczna sałatka grecka z pomidorem, ogórkiem, oliwkami i fetą.',
                'instruction' => '1. Pokrój pomidory, ogórki i cebulę.
                      2. Dodaj oliwki i pokruszoną fetę.
                      3. Skrop oliwą z oliwek, dopraw solą i pieprzem.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'pomidor', 'quantity' => 2],
                    ['name' => 'ogórek', 'quantity' => 1],
                    ['name' => 'cebula', 'quantity' => 1],
                    ['name' => 'oliwki', 'quantity' => 30],
                    ['name' => 'ser feta', 'quantity' => 30],
                    ['name' => 'oliwa z oliwek', 'quantity' => 15],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/greek-salad.jpg',
            ],
            [
                'name' => 'ABC1 Kremowa Zupa Brokułowa',
                'description' => 'Delikatna zupa kremowa z soczystym brokułem i serem parmezan.',
                'instruction' => '1. Gotuj brokuły na parze do miękkości.
                      2. Rozblenduj je z gorącym mlekiem i serem parmezan.
                      3. Dopraw solą i pieprzem, podawaj z grzankami.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'brokuł', 'quantity' => 1],
                    ['name' => 'mleko', 'quantity' => 200],
                    ['name' => 'ser parmezan', 'quantity' => 30],
                    ['name' => 'grzanki', 'quantity' => 50],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/cream-of-broccoli-soup.jpg',
            ],
            [
                'name' => 'ABC1 Kotlety Schabowe',
                'description' => 'Tradycyjne kotlety schabowe smażone na maśle klarowanym.',
                'instruction' => '1. Rozbij kotlety schabowe, dopraw solą i pieprzem.
                      2. Obtocz w mące, jajku i bułce tartej.
                      3. Smaż na maśle klarowanym z obu stron do zarumienienia.',
                'diet' => null,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'kotlet schabowy', 'quantity' => 2],
                    ['name' => 'masło', 'quantity' => 30],
                    ['name' => 'mąka', 'quantity' => 30],
                    ['name' => 'jajko', 'quantity' => 1],
                    ['name' => 'bułka tarta', 'quantity' => 30],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/pork-cutlets.jpg',
            ],
            [
                'name' => 'ABC1 Sałatka z Komosą Ryżową',
                'description' => 'Zdrowa sałatka z komosą ryżową, pieczonymi warzywami i sosem jogurtowym.',
                'instruction' => '1. Ugotuj komosę ryżową według instrukcji na opakowaniu.
                      2. Piecz warzywa (np. batata, paprykę, cukinię) z odrobiną oliwy.
                      3. Połącz komosę ryżową, warzywa.
                      4. Skrop sosem jogurtowym i podawaj.',
                'diet' => RecipeDiet::VEGAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'komosa ryżowa', 'quantity' => 100],
                    ['name' => 'batat', 'quantity' => 1],
                    ['name' => 'papryka', 'quantity' => 1],
                    ['name' => 'cukinia', 'quantity' => 1],
                    ['name' => 'oliwa z oliwek', 'quantity' => 15],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                    ['name' => 'jogurt', 'quantity' => 30],
                ],
                'image_path' => 'recipes/quinoa-veggie-salad.jpg',
            ],
            [
                'name' => 'ABC1 Krem z Dyni',
                'description' => 'Delikatny krem z dyni z nutą cynamonu i orzechów.',
                'instruction' => '1. Upiecz kawałki dyni w piekarniku.
                      2. Rozblenduj dynię z ciepłym mlekiem roślinnym.
                      3. Dodaj cynamon, orzechy i sól. Podawaj gorący.',
                'diet' => RecipeDiet::VEGAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'dynia', 'quantity' => 200],
                    ['name' => 'mleko owsiane', 'quantity' => 200],
                    ['name' => 'cynamon', 'quantity' => 5],
                    ['name' => 'orzechy włoskie', 'quantity' => 10],
                    ['name' => 'sól', 'quantity' => 5],
                ],
                'image_path' => 'recipes/pumpkin-soup.jpg',
            ],
            [
                'name' => 'ABC2 Kasza Jaglana z Warzywami',
                'description' => 'Kasza jaglana z duszonymi warzywami i sosie pomidorowym.',
                'instruction' => '1. Ugotuj kaszę jaglaną zgodnie z instrukcją.
                      2. Podsmaż cebulę i czosnek, dodaj pokrojone warzywa (np. cukinię, paprykę).
                      3. Dodaj sos pomidorowy i dusz warzywa.
                      4. Podawaj z ugotowaną kaszą.',
                'diet' => RecipeDiet::VEGAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'kasza jaglana', 'quantity' => 100],
                    ['name' => 'cebula', 'quantity' => 1],
                    ['name' => 'czosnek', 'quantity' => 2],
                    ['name' => 'cukinia', 'quantity' => 1],
                    ['name' => 'papryka', 'quantity' => 1],
                    ['name' => 'pomidor', 'quantity' => 2],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/buckwheat-vegetable-stir-fry.jpg',
            ],
            [
                'name' => 'ABC2 Kremowy Kurczak z Pieczarkami',
                'description' => 'Delikatne kawałki kurczaka w kremowym sosie z pieczarkami.',
                'instruction' => '1. Na patelni rozgrzej olej i zrumień kawałki kurczaka.
                      2. Dodaj posiekane pieczarki i smaż do zmiękczenia.
                      3. Wlej śmietankę i gotuj na małym ogniu przez 10 minut.
                      4. Dopraw solą, pieprzem i posyp posiekanym koperkiem.',
                'diet' => null,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'pierś z kurczaka', 'quantity' => 300],
                    ['name' => 'olej roślinny', 'quantity' => 30],
                    ['name' => 'pieczarki', 'quantity' => 200],
                    ['name' => 'śmietanka do kawy', 'quantity' => 200],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                    ['name' => 'koperek', 'quantity' => 10],
                ],
                'image_path' => 'recipes/creamy-chicken-mushrooms.jpg',
            ],
            [
                'name' => 'ABC2 Sałatka z Grilowanym Łososiem',
                'description' => 'Klasyczna sałatka Cezar z dodatkiem soczystego grilowanego łososia.',
                'instruction' => '1. Griluj filet łososia przez 4 minuty z każdej strony.
                      2. Na talerzu ułóż sałatę, pokrojonego łososia, posyp parmezanem.
                      3. Polej sosem Cezar i udekoruj kawałkami grzanki.',
                'diet' => null,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'filet z łososia', 'quantity' => 150],
                    ['name' => 'ser parmezan', 'quantity' => 30],
                    ['name' => 'sałata', 'quantity' => 100],
                    ['name' => 'grzanki', 'quantity' => 50],
                ],
                'image_path' => 'recipes/caesar-salad-salmon.jpg',
            ],
            [
                'name' => 'ABC2 Wegetariańskie Curry z Batatem',
                'description' => 'Pikantne wegetariańskie curry z batatem, ciecierzycą i szpinakiem.',
                'instruction' => '1. W garnku podsmaż czosnek i cebulę na oleju.
                      2. Dodaj pokrojonego w kostkę batata, ciecierzycę i przyprawy curry.
                      3. Wlej mleko kokosowe i gotuj do miękkości batata.
                      4. Na końcu dodaj szpinak i gotuj jeszcze 3 minuty.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::LONG,
                'ingredients' => [
                    ['name' => 'batat', 'quantity' => 200],
                    ['name' => 'ciecierzyca', 'quantity' => 150],
                    ['name' => 'szpinak', 'quantity' => 100],
                    ['name' => 'mleko', 'quantity' => 200],
                    ['name' => 'olej roślinny', 'quantity' => 30],
                    ['name' => 'czosnek', 'quantity' => 10],
                ],
                'image_path' => 'recipes/vegetarian-curry-sweet-potato.jpg',
            ],
            [
                'name' => 'ABC2 Makaron Penne z Sosem Serowym',
                'description' => 'Kremowy makaron penne w bogatym sosie serowym.',
                'instruction' => '1. Ugotuj makaron penne al dente.
                      2. Na patelni rozpuść masło, dodaj śmietanę i ser, mieszając do uzyskania gładkiego sosu.
                      3. Dodaj ugotowany makaron do sosu, mieszaj i podawaj z posiekaną bazylią.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'penne', 'quantity' => 200],
                    ['name' => 'masło', 'quantity' => 30],
                    ['name' => 'śmietana kremówka', 'quantity' => 100],
                    ['name' => 'ser', 'quantity' => 50],
                    ['name' => 'bazylia', 'quantity' => 5],
                ],
                'image_path' => 'recipes/penne-cheese-sauce.jpg',
            ],
            [
                'name' => 'ABC2 Pieczona Kaczka z Jabłkami',
                'description' => 'Soczysta pieczona kaczka z jabłkami i ziołami.',
                'instruction' => '1. Kaczkę natrzyj solą, pieprzem i ziołami.
                      2. Włóż do środka pokrojone jabłka.
                      3. Piecz w piekarniku przez 1,5 godziny w temperaturze 180°C.
                      4. Podawaj z pieczonymi jabłkami i sosie z pieczenia.',
                'diet' => null,
                'time' => RecipeTime::LONG,
                'ingredients' => [
                    ['name' => 'kaczka', 'quantity' => 1000],
                    ['name' => 'jabłko', 'quantity' => 2],
                    ['name' => 'sól', 'quantity' => 10],
                    ['name' => 'pieprz', 'quantity' => 5],
                    ['name' => 'rozmaryn', 'quantity' => 5],
                    ['name' => 'tymianek', 'quantity' => 5],
                ],
                'image_path' => 'recipes/roasted-duck-apples.jpg',
            ],
            [
                'name' => 'ABC2 Omlet z Serem i Szpinakiem',
                'description' => 'Puszysty omlet z serem, świeżym szpinakiem i cebulą.',
                'instruction' => '1. Roztrzep jajka w misce, dodaj posiekany szpinak i cebulę.
                      2. Na patelni rozgrzej masło i wlej masę jajeczną.
                      3. Posyp startym serem i smaż na małym ogniu do zastygnięcia.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'jajko', 'quantity' => 2],
                    ['name' => 'ser', 'quantity' => 30],
                    ['name' => 'szpinak', 'quantity' => 50],
                    ['name' => 'cebula', 'quantity' => 1],
                    ['name' => 'masło', 'quantity' => 10],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/spinach-cheese-omelette.jpg',
            ],
            [
                'name' => 'ABC2 Koktajl Truskawkowy z Bananem',
                'description' => 'Orzeźwiający koktajl z truskawkami, bananem i jogurtem.',
                'instruction' => '1. W blenderze połącz truskawki, banana, jogurt i miód.
                      2. Miksuj do uzyskania gładkiego koktajlu.
                      3. Podawaj schłodzone z plasterkiem pomarańczy.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'truskawka', 'quantity' => 20],
                    ['name' => 'banan', 'quantity' => 1],
                    ['name' => 'jogurt', 'quantity' => 150],
                    ['name' => 'miód', 'quantity' => 10],
                    ['name' => 'pomarańcza', 'quantity' => 1],
                ],
                'image_path' => 'recipes/strawberry-banana-smoothie.jpg',
            ],
            [
                'name' => 'ABC2 Sałatka Grecka',
                'description' => 'Klasyczna sałatka grecka z pomidorem, ogórkiem, oliwkami i fetą.',
                'instruction' => '1. Pokrój pomidory, ogórki i cebulę.
                      2. Dodaj oliwki i pokruszoną fetę.
                      3. Skrop oliwą z oliwek, dopraw solą i pieprzem.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'pomidor', 'quantity' => 2],
                    ['name' => 'ogórek', 'quantity' => 1],
                    ['name' => 'cebula', 'quantity' => 1],
                    ['name' => 'oliwki', 'quantity' => 30],
                    ['name' => 'ser feta', 'quantity' => 30],
                    ['name' => 'oliwa z oliwek', 'quantity' => 15],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/greek-salad.jpg',
            ],
            [
                'name' => 'ABC2 Kremowa Zupa Brokułowa',
                'description' => 'Delikatna zupa kremowa z soczystym brokułem i serem parmezan.',
                'instruction' => '1. Gotuj brokuły na parze do miękkości.
                      2. Rozblenduj je z gorącym mlekiem i serem parmezan.
                      3. Dopraw solą i pieprzem, podawaj z grzankami.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'brokuł', 'quantity' => 1],
                    ['name' => 'mleko', 'quantity' => 200],
                    ['name' => 'ser parmezan', 'quantity' => 30],
                    ['name' => 'grzanki', 'quantity' => 50],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/cream-of-broccoli-soup.jpg',
            ],
            [
                'name' => 'ABC2 Kotlety Schabowe',
                'description' => 'Tradycyjne kotlety schabowe smażone na maśle klarowanym.',
                'instruction' => '1. Rozbij kotlety schabowe, dopraw solą i pieprzem.
                      2. Obtocz w mące, jajku i bułce tartej.
                      3. Smaż na maśle klarowanym z obu stron do zarumienienia.',
                'diet' => null,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'kotlet schabowy', 'quantity' => 2],
                    ['name' => 'masło', 'quantity' => 30],
                    ['name' => 'mąka', 'quantity' => 30],
                    ['name' => 'jajko', 'quantity' => 1],
                    ['name' => 'bułka tarta', 'quantity' => 30],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/pork-cutlets.jpg',
            ],
            [
                'name' => 'ABC2 Sałatka z Komosą Ryżową',
                'description' => 'Zdrowa sałatka z komosą ryżową, pieczonymi warzywami i sosem jogurtowym.',
                'instruction' => '1. Ugotuj komosę ryżową według instrukcji na opakowaniu.
                      2. Piecz warzywa (np. batata, paprykę, cukinię) z odrobiną oliwy.
                      3. Połącz komosę ryżową, warzywa.
                      4. Skrop sosem jogurtowym i podawaj.',
                'diet' => RecipeDiet::VEGAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'komosa ryżowa', 'quantity' => 100],
                    ['name' => 'batat', 'quantity' => 1],
                    ['name' => 'papryka', 'quantity' => 1],
                    ['name' => 'cukinia', 'quantity' => 1],
                    ['name' => 'oliwa z oliwek', 'quantity' => 15],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                    ['name' => 'jogurt', 'quantity' => 30],
                ],
                'image_path' => 'recipes/quinoa-veggie-salad.jpg',
            ],
            [
                'name' => 'ABC2 Krem z Dyni',
                'description' => 'Delikatny krem z dyni z nutą cynamonu i orzechów.',
                'instruction' => '1. Upiecz kawałki dyni w piekarniku.
                      2. Rozblenduj dynię z ciepłym mlekiem roślinnym.
                      3. Dodaj cynamon, orzechy i sól. Podawaj gorący.',
                'diet' => RecipeDiet::VEGAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'dynia', 'quantity' => 200],
                    ['name' => 'mleko owsiane', 'quantity' => 200],
                    ['name' => 'cynamon', 'quantity' => 5],
                    ['name' => 'orzechy włoskie', 'quantity' => 10],
                    ['name' => 'sól', 'quantity' => 5],
                ],
                'image_path' => 'recipes/pumpkin-soup.jpg',
            ],
            [                'name' => '1Kremowy Kurczak z Pieczarkami',
                'description' => 'Delikatne kawałki kurczaka w kremowym sosie z pieczarkami.',
                'instruction' => '1. Na patelni rozgrzej olej i zrumień kawałki kurczaka.
                      2. Dodaj posiekane pieczarki i smaż do zmiękczenia.
                      3. Wlej śmietankę i gotuj na małym ogniu przez 10 minut.
                      4. Dopraw solą, pieprzem i posyp posiekanym koperkiem.',
                'diet' => null,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'pierś z kurczaka', 'quantity' => 300],
                    ['name' => 'olej roślinny', 'quantity' => 30],
                    ['name' => 'pieczarki', 'quantity' => 200],
                    ['name' => 'śmietanka do kawy', 'quantity' => 200],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                    ['name' => 'koperek', 'quantity' => 10],
                ],
                'image_path' => 'recipes/creamy-chicken-mushrooms.jpg',
            ],
            [                'name' => '1Sałatka z Grilowanym Łososiem',
                'description' => 'Klasyczna sałatka Cezar z dodatkiem soczystego grilowanego łososia.',
                'instruction' => '1. Griluj filet łososia przez 4 minuty z każdej strony.
                      2. Na talerzu ułóż sałatę, pokrojonego łososia, posyp parmezanem.
                      3. Polej sosem Cezar i udekoruj kawałkami grzanki.',
                'diet' => null,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'filet z łososia', 'quantity' => 150],
                    ['name' => 'ser parmezan', 'quantity' => 30],
                    ['name' => 'sałata', 'quantity' => 100],
                    ['name' => 'grzanki', 'quantity' => 50],
                ],
                'image_path' => 'recipes/caesar-salad-salmon.jpg',
            ],
            [                'name' => '1Wegetariańskie Curry z Batatem',
                'description' => 'Pikantne wegetariańskie curry z batatem, ciecierzycą i szpinakiem.',
                'instruction' => '1. W garnku podsmaż czosnek i cebulę na oleju.
                      2. Dodaj pokrojonego w kostkę batata, ciecierzycę i przyprawy curry.
                      3. Wlej mleko kokosowe i gotuj do miękkości batata.
                      4. Na końcu dodaj szpinak i gotuj jeszcze 3 minuty.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::LONG,
                'ingredients' => [
                    ['name' => 'batat', 'quantity' => 200],
                    ['name' => 'ciecierzyca', 'quantity' => 150],
                    ['name' => 'szpinak', 'quantity' => 100],
                    ['name' => 'mleko', 'quantity' => 200],
                    ['name' => 'olej roślinny', 'quantity' => 30],
                    ['name' => 'czosnek', 'quantity' => 10],
                ],
                'image_path' => 'recipes/vegetarian-curry-sweet-potato.jpg',
            ],
            [                'name' => '1Makaron Penne z Sosem Serowym',
                'description' => 'Kremowy makaron penne w bogatym sosie serowym.',
                'instruction' => '1. Ugotuj makaron penne al dente.
                      2. Na patelni rozpuść masło, dodaj śmietanę i ser, mieszając do uzyskania gładkiego sosu.
                      3. Dodaj ugotowany makaron do sosu, mieszaj i podawaj z posiekaną bazylią.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'penne', 'quantity' => 200],
                    ['name' => 'masło', 'quantity' => 30],
                    ['name' => 'śmietana kremówka', 'quantity' => 100],
                    ['name' => 'ser', 'quantity' => 50],
                    ['name' => 'bazylia', 'quantity' => 5],
                ],
                'image_path' => 'recipes/penne-cheese-sauce.jpg',
            ],
            [                'name' => '1Pieczona Kaczka z Jabłkami',
                'description' => 'Soczysta pieczona kaczka z jabłkami i ziołami.',
                'instruction' => '1. Kaczkę natrzyj solą, pieprzem i ziołami.
                      2. Włóż do środka pokrojone jabłka.
                      3. Piecz w piekarniku przez 1,5 godziny w temperaturze 180°C.
                      4. Podawaj z pieczonymi jabłkami i sosie z pieczenia.',
                'diet' => null,
                'time' => RecipeTime::LONG,
                'ingredients' => [
                    ['name' => 'kaczka', 'quantity' => 1000],
                    ['name' => 'jabłko', 'quantity' => 2],
                    ['name' => 'sól', 'quantity' => 10],
                    ['name' => 'pieprz', 'quantity' => 5],
                    ['name' => 'rozmaryn', 'quantity' => 5],
                    ['name' => 'tymianek', 'quantity' => 5],
                ],
                'image_path' => 'recipes/roasted-duck-apples.jpg',
            ],
            [                'name' => '1Omlet z Serem i Szpinakiem',
                'description' => 'Puszysty omlet z serem, świeżym szpinakiem i cebulą.',
                'instruction' => '1. Roztrzep jajka w misce, dodaj posiekany szpinak i cebulę.
                      2. Na patelni rozgrzej masło i wlej masę jajeczną.
                      3. Posyp startym serem i smaż na małym ogniu do zastygnięcia.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'jajko', 'quantity' => 2],
                    ['name' => 'ser', 'quantity' => 30],
                    ['name' => 'szpinak', 'quantity' => 50],
                    ['name' => 'cebula', 'quantity' => 1],
                    ['name' => 'masło', 'quantity' => 10],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/spinach-cheese-omelette.jpg',
            ],
            [                'name' => '1Koktajl Truskawkowy z Bananem',
                'description' => 'Orzeźwiający koktajl z truskawkami, bananem i jogurtem.',
                'instruction' => '1. W blenderze połącz truskawki, banana, jogurt i miód.
                      2. Miksuj do uzyskania gładkiego koktajlu.
                      3. Podawaj schłodzone z plasterkiem pomarańczy.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'truskawka', 'quantity' => 20],
                    ['name' => 'banan', 'quantity' => 1],
                    ['name' => 'jogurt', 'quantity' => 150],
                    ['name' => 'miód', 'quantity' => 10],
                    ['name' => 'pomarańcza', 'quantity' => 1],
                ],
                'image_path' => 'recipes/strawberry-banana-smoothie.jpg',
            ],
            [                'name' => '1Sałatka Grecka',
                'description' => 'Klasyczna sałatka grecka z pomidorem, ogórkiem, oliwkami i fetą.',
                'instruction' => '1. Pokrój pomidory, ogórki i cebulę.
                      2. Dodaj oliwki i pokruszoną fetę.
                      3. Skrop oliwą z oliwek, dopraw solą i pieprzem.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'pomidor', 'quantity' => 2],
                    ['name' => 'ogórek', 'quantity' => 1],
                    ['name' => 'cebula', 'quantity' => 1],
                    ['name' => 'oliwki', 'quantity' => 30],
                    ['name' => 'ser feta', 'quantity' => 30],
                    ['name' => 'oliwa z oliwek', 'quantity' => 15],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/greek-salad.jpg',
            ],
            [                'name' => '1Kremowa Zupa Brokułowa',
                'description' => 'Delikatna zupa kremowa z soczystym brokułem i serem parmezan.',
                'instruction' => '1. Gotuj brokuły na parze do miękkości.
                      2. Rozblenduj je z gorącym mlekiem i serem parmezan.
                      3. Dopraw solą i pieprzem, podawaj z grzankami.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'brokuł', 'quantity' => 1],
                    ['name' => 'mleko', 'quantity' => 200],
                    ['name' => 'ser parmezan', 'quantity' => 30],
                    ['name' => 'grzanki', 'quantity' => 50],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/cream-of-broccoli-soup.jpg',
            ],
            [                'name' => '1Kotlety Schabowe',
                'description' => 'Tradycyjne kotlety schabowe smażone na maśle klarowanym.',
                'instruction' => '1. Rozbij kotlety schabowe, dopraw solą i pieprzem.
                      2. Obtocz w mące, jajku i bułce tartej.
                      3. Smaż na maśle klarowanym z obu stron do zarumienienia.',
                'diet' => null,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'kotlet schabowy', 'quantity' => 2],
                    ['name' => 'masło', 'quantity' => 30],
                    ['name' => 'mąka', 'quantity' => 30],
                    ['name' => 'jajko', 'quantity' => 1],
                    ['name' => 'bułka tarta', 'quantity' => 30],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/pork-cutlets.jpg',
            ],
            [                'name' => '1Sałatka z Komosą Ryżową',
                'description' => 'Zdrowa sałatka z komosą ryżową, pieczonymi warzywami i sosem jogurtowym.',
                'instruction' => '1. Ugotuj komosę ryżową według instrukcji na opakowaniu.
                      2. Piecz warzywa (np. batata, paprykę, cukinię) z odrobiną oliwy.
                      3. Połącz komosę ryżową, warzywa.
                      4. Skrop sosem jogurtowym i podawaj.',
                'diet' => RecipeDiet::VEGAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'komosa ryżowa', 'quantity' => 100],
                    ['name' => 'batat', 'quantity' => 1],
                    ['name' => 'papryka', 'quantity' => 1],
                    ['name' => 'cukinia', 'quantity' => 1],
                    ['name' => 'oliwa z oliwek', 'quantity' => 15],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                    ['name' => 'jogurt', 'quantity' => 30],
                ],
                'image_path' => 'recipes/quinoa-veggie-salad.jpg',
            ],
            [                'name' => '1Krem z Dyni',
                'description' => 'Delikatny krem z dyni z nutą cynamonu i orzechów.',
                'instruction' => '1. Upiecz kawałki dyni w piekarniku.
                      2. Rozblenduj dynię z ciepłym mlekiem roślinnym.
                      3. Dodaj cynamon, orzechy i sól. Podawaj gorący.',
                'diet' => RecipeDiet::VEGAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'dynia', 'quantity' => 200],
                    ['name' => 'mleko owsiane', 'quantity' => 200],
                    ['name' => 'cynamon', 'quantity' => 5],
                    ['name' => 'orzechy włoskie', 'quantity' => 10],
                    ['name' => 'sól', 'quantity' => 5],
                ],
                'image_path' => 'recipes/pumpkin-soup.jpg',
            ],
            [                'name' => '1Kasza Jaglana z Warzywami',
                'description' => 'Kasza jaglana z duszonymi warzywami i sosie pomidorowym.',
                'instruction' => '1. Ugotuj kaszę jaglaną zgodnie z instrukcją.
                      2. Podsmaż cebulę i czosnek, dodaj pokrojone warzywa (np. cukinię, paprykę).
                      3. Dodaj sos pomidorowy i dusz warzywa.
                      4. Podawaj z ugotowaną kaszą.',
                'diet' => RecipeDiet::VEGAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'kasza jaglana', 'quantity' => 100],
                    ['name' => 'cebula', 'quantity' => 1],
                    ['name' => 'czosnek', 'quantity' => 2],
                    ['name' => 'cukinia', 'quantity' => 1],
                    ['name' => 'papryka', 'quantity' => 1],
                    ['name' => 'pomidor', 'quantity' => 2],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/buckwheat-vegetable-stir-fry.jpg',
            ],
            [                'name' => '1XYZ Kasza Jaglana z Warzywami',
                'description' => 'Kasza jaglana z duszonymi warzywami i sosie pomidorowym.',
                'instruction' => '1. Ugotuj kaszę jaglaną zgodnie z instrukcją.
                      2. Podsmaż cebulę i czosnek, dodaj pokrojone warzywa (np. cukinię, paprykę).
                      3. Dodaj sos pomidorowy i dusz warzywa.
                      4. Podawaj z ugotowaną kaszą.',
                'diet' => RecipeDiet::VEGAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'kasza jaglana', 'quantity' => 100],
                    ['name' => 'cebula', 'quantity' => 1],
                    ['name' => 'czosnek', 'quantity' => 2],
                    ['name' => 'cukinia', 'quantity' => 1],
                    ['name' => 'papryka', 'quantity' => 1],
                    ['name' => 'pomidor', 'quantity' => 2],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/buckwheat-vegetable-stir-fry.jpg',
            ],
            [                'name' => '1XYZ Kremowy Kurczak z Pieczarkami',
                'description' => 'Delikatne kawałki kurczaka w kremowym sosie z pieczarkami.',
                'instruction' => '1. Na patelni rozgrzej olej i zrumień kawałki kurczaka.
                      2. Dodaj posiekane pieczarki i smaż do zmiękczenia.
                      3. Wlej śmietankę i gotuj na małym ogniu przez 10 minut.
                      4. Dopraw solą, pieprzem i posyp posiekanym koperkiem.',
                'diet' => null,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'pierś z kurczaka', 'quantity' => 300],
                    ['name' => 'olej roślinny', 'quantity' => 30],
                    ['name' => 'pieczarki', 'quantity' => 200],
                    ['name' => 'śmietanka do kawy', 'quantity' => 200],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                    ['name' => 'koperek', 'quantity' => 10],
                ],
                'image_path' => 'recipes/creamy-chicken-mushrooms.jpg',
            ],
            [                'name' => '1XYZ Sałatka z Grilowanym Łososiem',
                'description' => 'Klasyczna sałatka Cezar z dodatkiem soczystego grilowanego łososia.',
                'instruction' => '1. Griluj filet łososia przez 4 minuty z każdej strony.
                      2. Na talerzu ułóż sałatę, pokrojonego łososia, posyp parmezanem.
                      3. Polej sosem Cezar i udekoruj kawałkami grzanki.',
                'diet' => null,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'filet z łososia', 'quantity' => 150],
                    ['name' => 'ser parmezan', 'quantity' => 30],
                    ['name' => 'sałata', 'quantity' => 100],
                    ['name' => 'grzanki', 'quantity' => 50],
                ],
                'image_path' => 'recipes/caesar-salad-salmon.jpg',
            ],
            [                'name' => '1XYZ Wegetariańskie Curry z Batatem',
                'description' => 'Pikantne wegetariańskie curry z batatem, ciecierzycą i szpinakiem.',
                'instruction' => '1. W garnku podsmaż czosnek i cebulę na oleju.
                      2. Dodaj pokrojonego w kostkę batata, ciecierzycę i przyprawy curry.
                      3. Wlej mleko kokosowe i gotuj do miękkości batata.
                      4. Na końcu dodaj szpinak i gotuj jeszcze 3 minuty.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::LONG,
                'ingredients' => [
                    ['name' => 'batat', 'quantity' => 200],
                    ['name' => 'ciecierzyca', 'quantity' => 150],
                    ['name' => 'szpinak', 'quantity' => 100],
                    ['name' => 'mleko', 'quantity' => 200],
                    ['name' => 'olej roślinny', 'quantity' => 30],
                    ['name' => 'czosnek', 'quantity' => 10],
                ],
                'image_path' => 'recipes/vegetarian-curry-sweet-potato.jpg',
            ],
            [                'name' => '1XYZ Makaron Penne z Sosem Serowym',
                'description' => 'Kremowy makaron penne w bogatym sosie serowym.',
                'instruction' => '1. Ugotuj makaron penne al dente.
                      2. Na patelni rozpuść masło, dodaj śmietanę i ser, mieszając do uzyskania gładkiego sosu.
                      3. Dodaj ugotowany makaron do sosu, mieszaj i podawaj z posiekaną bazylią.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'penne', 'quantity' => 200],
                    ['name' => 'masło', 'quantity' => 30],
                    ['name' => 'śmietana kremówka', 'quantity' => 100],
                    ['name' => 'ser', 'quantity' => 50],
                    ['name' => 'bazylia', 'quantity' => 5],
                ],
                'image_path' => 'recipes/penne-cheese-sauce.jpg',
            ],
            [                'name' => '1XYZ Pieczona Kaczka z Jabłkami',
                'description' => 'Soczysta pieczona kaczka z jabłkami i ziołami.',
                'instruction' => '1. Kaczkę natrzyj solą, pieprzem i ziołami.
                      2. Włóż do środka pokrojone jabłka.
                      3. Piecz w piekarniku przez 1,5 godziny w temperaturze 180°C.
                      4. Podawaj z pieczonymi jabłkami i sosie z pieczenia.',
                'diet' => null,
                'time' => RecipeTime::LONG,
                'ingredients' => [
                    ['name' => 'kaczka', 'quantity' => 1000],
                    ['name' => 'jabłko', 'quantity' => 2],
                    ['name' => 'sól', 'quantity' => 10],
                    ['name' => 'pieprz', 'quantity' => 5],
                    ['name' => 'rozmaryn', 'quantity' => 5],
                    ['name' => 'tymianek', 'quantity' => 5],
                ],
                'image_path' => 'recipes/roasted-duck-apples.jpg',
            ],
            [                'name' => '1XYZ Omlet z Serem i Szpinakiem',
                'description' => 'Puszysty omlet z serem, świeżym szpinakiem i cebulą.',
                'instruction' => '1. Roztrzep jajka w misce, dodaj posiekany szpinak i cebulę.
                      2. Na patelni rozgrzej masło i wlej masę jajeczną.
                      3. Posyp startym serem i smaż na małym ogniu do zastygnięcia.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'jajko', 'quantity' => 2],
                    ['name' => 'ser', 'quantity' => 30],
                    ['name' => 'szpinak', 'quantity' => 50],
                    ['name' => 'cebula', 'quantity' => 1],
                    ['name' => 'masło', 'quantity' => 10],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/spinach-cheese-omelette.jpg',
            ],
            [                'name' => '1XYZ Koktajl Truskawkowy z Bananem',
                'description' => 'Orzeźwiający koktajl z truskawkami, bananem i jogurtem.',
                'instruction' => '1. W blenderze połącz truskawki, banana, jogurt i miód.
                      2. Miksuj do uzyskania gładkiego koktajlu.
                      3. Podawaj schłodzone z plasterkiem pomarańczy.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'truskawka', 'quantity' => 20],
                    ['name' => 'banan', 'quantity' => 1],
                    ['name' => 'jogurt', 'quantity' => 150],
                    ['name' => 'miód', 'quantity' => 10],
                    ['name' => 'pomarańcza', 'quantity' => 1],
                ],
                'image_path' => 'recipes/strawberry-banana-smoothie.jpg',
            ],
            [                'name' => '1XYZ Sałatka Grecka',
                'description' => 'Klasyczna sałatka grecka z pomidorem, ogórkiem, oliwkami i fetą.',
                'instruction' => '1. Pokrój pomidory, ogórki i cebulę.
                      2. Dodaj oliwki i pokruszoną fetę.
                      3. Skrop oliwą z oliwek, dopraw solą i pieprzem.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'pomidor', 'quantity' => 2],
                    ['name' => 'ogórek', 'quantity' => 1],
                    ['name' => 'cebula', 'quantity' => 1],
                    ['name' => 'oliwki', 'quantity' => 30],
                    ['name' => 'ser feta', 'quantity' => 30],
                    ['name' => 'oliwa z oliwek', 'quantity' => 15],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/greek-salad.jpg',
            ],
            [                'name' => '1XYZ Kremowa Zupa Brokułowa',
                'description' => 'Delikatna zupa kremowa z soczystym brokułem i serem parmezan.',
                'instruction' => '1. Gotuj brokuły na parze do miękkości.
                      2. Rozblenduj je z gorącym mlekiem i serem parmezan.
                      3. Dopraw solą i pieprzem, podawaj z grzankami.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'brokuł', 'quantity' => 1],
                    ['name' => 'mleko', 'quantity' => 200],
                    ['name' => 'ser parmezan', 'quantity' => 30],
                    ['name' => 'grzanki', 'quantity' => 50],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/cream-of-broccoli-soup.jpg',
            ],
            [                'name' => '1XYZ Kotlety Schabowe',
                'description' => 'Tradycyjne kotlety schabowe smażone na maśle klarowanym.',
                'instruction' => '1. Rozbij kotlety schabowe, dopraw solą i pieprzem.
                      2. Obtocz w mące, jajku i bułce tartej.
                      3. Smaż na maśle klarowanym z obu stron do zarumienienia.',
                'diet' => null,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'kotlet schabowy', 'quantity' => 2],
                    ['name' => 'masło', 'quantity' => 30],
                    ['name' => 'mąka', 'quantity' => 30],
                    ['name' => 'jajko', 'quantity' => 1],
                    ['name' => 'bułka tarta', 'quantity' => 30],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/pork-cutlets.jpg',
            ],
            [                'name' => '1XYZ Sałatka z Komosą Ryżową',
                'description' => 'Zdrowa sałatka z komosą ryżową, pieczonymi warzywami i sosem jogurtowym.',
                'instruction' => '1. Ugotuj komosę ryżową według instrukcji na opakowaniu.
                      2. Piecz warzywa (np. batata, paprykę, cukinię) z odrobiną oliwy.
                      3. Połącz komosę ryżową, warzywa.
                      4. Skrop sosem jogurtowym i podawaj.',
                'diet' => RecipeDiet::VEGAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'komosa ryżowa', 'quantity' => 100],
                    ['name' => 'batat', 'quantity' => 1],
                    ['name' => 'papryka', 'quantity' => 1],
                    ['name' => 'cukinia', 'quantity' => 1],
                    ['name' => 'oliwa z oliwek', 'quantity' => 15],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                    ['name' => 'jogurt', 'quantity' => 30],
                ],
                'image_path' => 'recipes/quinoa-veggie-salad.jpg',
            ],
            [                'name' => '1XYZ Krem z Dyni',
                'description' => 'Delikatny krem z dyni z nutą cynamonu i orzechów.',
                'instruction' => '1. Upiecz kawałki dyni w piekarniku.
                      2. Rozblenduj dynię z ciepłym mlekiem roślinnym.
                      3. Dodaj cynamon, orzechy i sól. Podawaj gorący.',
                'diet' => RecipeDiet::VEGAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'dynia', 'quantity' => 200],
                    ['name' => 'mleko owsiane', 'quantity' => 200],
                    ['name' => 'cynamon', 'quantity' => 5],
                    ['name' => 'orzechy włoskie', 'quantity' => 10],
                    ['name' => 'sól', 'quantity' => 5],
                ],
                'image_path' => 'recipes/pumpkin-soup.jpg',
            ],
            [                'name' => '1ABC1 Kasza Jaglana z Warzywami',
                'description' => 'Kasza jaglana z duszonymi warzywami i sosie pomidorowym.',
                'instruction' => '1. Ugotuj kaszę jaglaną zgodnie z instrukcją.
                      2. Podsmaż cebulę i czosnek, dodaj pokrojone warzywa (np. cukinię, paprykę).
                      3. Dodaj sos pomidorowy i dusz warzywa.
                      4. Podawaj z ugotowaną kaszą.',
                'diet' => RecipeDiet::VEGAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'kasza jaglana', 'quantity' => 100],
                    ['name' => 'cebula', 'quantity' => 1],
                    ['name' => 'czosnek', 'quantity' => 2],
                    ['name' => 'cukinia', 'quantity' => 1],
                    ['name' => 'papryka', 'quantity' => 1],
                    ['name' => 'pomidor', 'quantity' => 2],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/buckwheat-vegetable-stir-fry.jpg',
            ],
            [                'name' => '1ABC1 Kremowy Kurczak z Pieczarkami',
                'description' => 'Delikatne kawałki kurczaka w kremowym sosie z pieczarkami.',
                'instruction' => '1. Na patelni rozgrzej olej i zrumień kawałki kurczaka.
                      2. Dodaj posiekane pieczarki i smaż do zmiękczenia.
                      3. Wlej śmietankę i gotuj na małym ogniu przez 10 minut.
                      4. Dopraw solą, pieprzem i posyp posiekanym koperkiem.',
                'diet' => null,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'pierś z kurczaka', 'quantity' => 300],
                    ['name' => 'olej roślinny', 'quantity' => 30],
                    ['name' => 'pieczarki', 'quantity' => 200],
                    ['name' => 'śmietanka do kawy', 'quantity' => 200],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                    ['name' => 'koperek', 'quantity' => 10],
                ],
                'image_path' => 'recipes/creamy-chicken-mushrooms.jpg',
            ],
            [                'name' => '1ABC1 Sałatka z Grilowanym Łososiem',
                'description' => 'Klasyczna sałatka Cezar z dodatkiem soczystego grilowanego łososia.',
                'instruction' => '1. Griluj filet łososia przez 4 minuty z każdej strony.
                      2. Na talerzu ułóż sałatę, pokrojonego łososia, posyp parmezanem.
                      3. Polej sosem Cezar i udekoruj kawałkami grzanki.',
                'diet' => null,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'filet z łososia', 'quantity' => 150],
                    ['name' => 'ser parmezan', 'quantity' => 30],
                    ['name' => 'sałata', 'quantity' => 100],
                    ['name' => 'grzanki', 'quantity' => 50],
                ],
                'image_path' => 'recipes/caesar-salad-salmon.jpg',
            ],
            [                'name' => '1ABC1 Wegetariańskie Curry z Batatem',
                'description' => 'Pikantne wegetariańskie curry z batatem, ciecierzycą i szpinakiem.',
                'instruction' => '1. W garnku podsmaż czosnek i cebulę na oleju.
                      2. Dodaj pokrojonego w kostkę batata, ciecierzycę i przyprawy curry.
                      3. Wlej mleko kokosowe i gotuj do miękkości batata.
                      4. Na końcu dodaj szpinak i gotuj jeszcze 3 minuty.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::LONG,
                'ingredients' => [
                    ['name' => 'batat', 'quantity' => 200],
                    ['name' => 'ciecierzyca', 'quantity' => 150],
                    ['name' => 'szpinak', 'quantity' => 100],
                    ['name' => 'mleko', 'quantity' => 200],
                    ['name' => 'olej roślinny', 'quantity' => 30],
                    ['name' => 'czosnek', 'quantity' => 10],
                ],
                'image_path' => 'recipes/vegetarian-curry-sweet-potato.jpg',
            ],
            [                'name' => '1ABC1 Makaron Penne z Sosem Serowym',
                'description' => 'Kremowy makaron penne w bogatym sosie serowym.',
                'instruction' => '1. Ugotuj makaron penne al dente.
                      2. Na patelni rozpuść masło, dodaj śmietanę i ser, mieszając do uzyskania gładkiego sosu.
                      3. Dodaj ugotowany makaron do sosu, mieszaj i podawaj z posiekaną bazylią.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'penne', 'quantity' => 200],
                    ['name' => 'masło', 'quantity' => 30],
                    ['name' => 'śmietana kremówka', 'quantity' => 100],
                    ['name' => 'ser', 'quantity' => 50],
                    ['name' => 'bazylia', 'quantity' => 5],
                ],
                'image_path' => 'recipes/penne-cheese-sauce.jpg',
            ],
            [                'name' => '1ABC1 Pieczona Kaczka z Jabłkami',
                'description' => 'Soczysta pieczona kaczka z jabłkami i ziołami.',
                'instruction' => '1. Kaczkę natrzyj solą, pieprzem i ziołami.
                      2. Włóż do środka pokrojone jabłka.
                      3. Piecz w piekarniku przez 1,5 godziny w temperaturze 180°C.
                      4. Podawaj z pieczonymi jabłkami i sosie z pieczenia.',
                'diet' => null,
                'time' => RecipeTime::LONG,
                'ingredients' => [
                    ['name' => 'kaczka', 'quantity' => 1000],
                    ['name' => 'jabłko', 'quantity' => 2],
                    ['name' => 'sól', 'quantity' => 10],
                    ['name' => 'pieprz', 'quantity' => 5],
                    ['name' => 'rozmaryn', 'quantity' => 5],
                    ['name' => 'tymianek', 'quantity' => 5],
                ],
                'image_path' => 'recipes/roasted-duck-apples.jpg',
            ],
            [                'name' => '1ABC1 Omlet z Serem i Szpinakiem',
                'description' => 'Puszysty omlet z serem, świeżym szpinakiem i cebulą.',
                'instruction' => '1. Roztrzep jajka w misce, dodaj posiekany szpinak i cebulę.
                      2. Na patelni rozgrzej masło i wlej masę jajeczną.
                      3. Posyp startym serem i smaż na małym ogniu do zastygnięcia.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'jajko', 'quantity' => 2],
                    ['name' => 'ser', 'quantity' => 30],
                    ['name' => 'szpinak', 'quantity' => 50],
                    ['name' => 'cebula', 'quantity' => 1],
                    ['name' => 'masło', 'quantity' => 10],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/spinach-cheese-omelette.jpg',
            ],
            [                'name' => '1ABC1 Koktajl Truskawkowy z Bananem',
                'description' => 'Orzeźwiający koktajl z truskawkami, bananem i jogurtem.',
                'instruction' => '1. W blenderze połącz truskawki, banana, jogurt i miód.
                      2. Miksuj do uzyskania gładkiego koktajlu.
                      3. Podawaj schłodzone z plasterkiem pomarańczy.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'truskawka', 'quantity' => 20],
                    ['name' => 'banan', 'quantity' => 1],
                    ['name' => 'jogurt', 'quantity' => 150],
                    ['name' => 'miód', 'quantity' => 10],
                    ['name' => 'pomarańcza', 'quantity' => 1],
                ],
                'image_path' => 'recipes/strawberry-banana-smoothie.jpg',
            ],
            [                'name' => '1ABC1 Sałatka Grecka',
                'description' => 'Klasyczna sałatka grecka z pomidorem, ogórkiem, oliwkami i fetą.',
                'instruction' => '1. Pokrój pomidory, ogórki i cebulę.
                      2. Dodaj oliwki i pokruszoną fetę.
                      3. Skrop oliwą z oliwek, dopraw solą i pieprzem.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'pomidor', 'quantity' => 2],
                    ['name' => 'ogórek', 'quantity' => 1],
                    ['name' => 'cebula', 'quantity' => 1],
                    ['name' => 'oliwki', 'quantity' => 30],
                    ['name' => 'ser feta', 'quantity' => 30],
                    ['name' => 'oliwa z oliwek', 'quantity' => 15],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/greek-salad.jpg',
            ],
            [                'name' => '1ABC1 Kremowa Zupa Brokułowa',
                'description' => 'Delikatna zupa kremowa z soczystym brokułem i serem parmezan.',
                'instruction' => '1. Gotuj brokuły na parze do miękkości.
                      2. Rozblenduj je z gorącym mlekiem i serem parmezan.
                      3. Dopraw solą i pieprzem, podawaj z grzankami.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'brokuł', 'quantity' => 1],
                    ['name' => 'mleko', 'quantity' => 200],
                    ['name' => 'ser parmezan', 'quantity' => 30],
                    ['name' => 'grzanki', 'quantity' => 50],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/cream-of-broccoli-soup.jpg',
            ],
            [                'name' => '1ABC1 Kotlety Schabowe',
                'description' => 'Tradycyjne kotlety schabowe smażone na maśle klarowanym.',
                'instruction' => '1. Rozbij kotlety schabowe, dopraw solą i pieprzem.
                      2. Obtocz w mące, jajku i bułce tartej.
                      3. Smaż na maśle klarowanym z obu stron do zarumienienia.',
                'diet' => null,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'kotlet schabowy', 'quantity' => 2],
                    ['name' => 'masło', 'quantity' => 30],
                    ['name' => 'mąka', 'quantity' => 30],
                    ['name' => 'jajko', 'quantity' => 1],
                    ['name' => 'bułka tarta', 'quantity' => 30],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/pork-cutlets.jpg',
            ],
            [                'name' => '1ABC1 Sałatka z Komosą Ryżową',
                'description' => 'Zdrowa sałatka z komosą ryżową, pieczonymi warzywami i sosem jogurtowym.',
                'instruction' => '1. Ugotuj komosę ryżową według instrukcji na opakowaniu.
                      2. Piecz warzywa (np. batata, paprykę, cukinię) z odrobiną oliwy.
                      3. Połącz komosę ryżową, warzywa.
                      4. Skrop sosem jogurtowym i podawaj.',
                'diet' => RecipeDiet::VEGAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'komosa ryżowa', 'quantity' => 100],
                    ['name' => 'batat', 'quantity' => 1],
                    ['name' => 'papryka', 'quantity' => 1],
                    ['name' => 'cukinia', 'quantity' => 1],
                    ['name' => 'oliwa z oliwek', 'quantity' => 15],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                    ['name' => 'jogurt', 'quantity' => 30],
                ],
                'image_path' => 'recipes/quinoa-veggie-salad.jpg',
            ],
            [                'name' => '1ABC1 Krem z Dyni',
                'description' => 'Delikatny krem z dyni z nutą cynamonu i orzechów.',
                'instruction' => '1. Upiecz kawałki dyni w piekarniku.
                      2. Rozblenduj dynię z ciepłym mlekiem roślinnym.
                      3. Dodaj cynamon, orzechy i sól. Podawaj gorący.',
                'diet' => RecipeDiet::VEGAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'dynia', 'quantity' => 200],
                    ['name' => 'mleko owsiane', 'quantity' => 200],
                    ['name' => 'cynamon', 'quantity' => 5],
                    ['name' => 'orzechy włoskie', 'quantity' => 10],
                    ['name' => 'sól', 'quantity' => 5],
                ],
                'image_path' => 'recipes/pumpkin-soup.jpg',
            ],
            [                'name' => '1ABC2 Kasza Jaglana z Warzywami',
                'description' => 'Kasza jaglana z duszonymi warzywami i sosie pomidorowym.',
                'instruction' => '1. Ugotuj kaszę jaglaną zgodnie z instrukcją.
                      2. Podsmaż cebulę i czosnek, dodaj pokrojone warzywa (np. cukinię, paprykę).
                      3. Dodaj sos pomidorowy i dusz warzywa.
                      4. Podawaj z ugotowaną kaszą.',
                'diet' => RecipeDiet::VEGAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'kasza jaglana', 'quantity' => 100],
                    ['name' => 'cebula', 'quantity' => 1],
                    ['name' => 'czosnek', 'quantity' => 2],
                    ['name' => 'cukinia', 'quantity' => 1],
                    ['name' => 'papryka', 'quantity' => 1],
                    ['name' => 'pomidor', 'quantity' => 2],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/buckwheat-vegetable-stir-fry.jpg',
            ],
            [                'name' => '1ABC2 Kremowy Kurczak z Pieczarkami',
                'description' => 'Delikatne kawałki kurczaka w kremowym sosie z pieczarkami.',
                'instruction' => '1. Na patelni rozgrzej olej i zrumień kawałki kurczaka.
                      2. Dodaj posiekane pieczarki i smaż do zmiękczenia.
                      3. Wlej śmietankę i gotuj na małym ogniu przez 10 minut.
                      4. Dopraw solą, pieprzem i posyp posiekanym koperkiem.',
                'diet' => null,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'pierś z kurczaka', 'quantity' => 300],
                    ['name' => 'olej roślinny', 'quantity' => 30],
                    ['name' => 'pieczarki', 'quantity' => 200],
                    ['name' => 'śmietanka do kawy', 'quantity' => 200],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                    ['name' => 'koperek', 'quantity' => 10],
                ],
                'image_path' => 'recipes/creamy-chicken-mushrooms.jpg',
            ],
            [                'name' => '1ABC2 Sałatka z Grilowanym Łososiem',
                'description' => 'Klasyczna sałatka Cezar z dodatkiem soczystego grilowanego łososia.',
                'instruction' => '1. Griluj filet łososia przez 4 minuty z każdej strony.
                      2. Na talerzu ułóż sałatę, pokrojonego łososia, posyp parmezanem.
                      3. Polej sosem Cezar i udekoruj kawałkami grzanki.',
                'diet' => null,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'filet z łososia', 'quantity' => 150],
                    ['name' => 'ser parmezan', 'quantity' => 30],
                    ['name' => 'sałata', 'quantity' => 100],
                    ['name' => 'grzanki', 'quantity' => 50],
                ],
                'image_path' => 'recipes/caesar-salad-salmon.jpg',
            ],
            [                'name' => '1ABC2 Wegetariańskie Curry z Batatem',
                'description' => 'Pikantne wegetariańskie curry z batatem, ciecierzycą i szpinakiem.',
                'instruction' => '1. W garnku podsmaż czosnek i cebulę na oleju.
                      2. Dodaj pokrojonego w kostkę batata, ciecierzycę i przyprawy curry.
                      3. Wlej mleko kokosowe i gotuj do miękkości batata.
                      4. Na końcu dodaj szpinak i gotuj jeszcze 3 minuty.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::LONG,
                'ingredients' => [
                    ['name' => 'batat', 'quantity' => 200],
                    ['name' => 'ciecierzyca', 'quantity' => 150],
                    ['name' => 'szpinak', 'quantity' => 100],
                    ['name' => 'mleko', 'quantity' => 200],
                    ['name' => 'olej roślinny', 'quantity' => 30],
                    ['name' => 'czosnek', 'quantity' => 10],
                ],
                'image_path' => 'recipes/vegetarian-curry-sweet-potato.jpg',
            ],
            [                'name' => '1ABC2 Makaron Penne z Sosem Serowym',
                'description' => 'Kremowy makaron penne w bogatym sosie serowym.',
                'instruction' => '1. Ugotuj makaron penne al dente.
                      2. Na patelni rozpuść masło, dodaj śmietanę i ser, mieszając do uzyskania gładkiego sosu.
                      3. Dodaj ugotowany makaron do sosu, mieszaj i podawaj z posiekaną bazylią.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'penne', 'quantity' => 200],
                    ['name' => 'masło', 'quantity' => 30],
                    ['name' => 'śmietana kremówka', 'quantity' => 100],
                    ['name' => 'ser', 'quantity' => 50],
                    ['name' => 'bazylia', 'quantity' => 5],
                ],
                'image_path' => 'recipes/penne-cheese-sauce.jpg',
            ],
            [                'name' => '1ABC2 Pieczona Kaczka z Jabłkami',
                'description' => 'Soczysta pieczona kaczka z jabłkami i ziołami.',
                'instruction' => '1. Kaczkę natrzyj solą, pieprzem i ziołami.
                      2. Włóż do środka pokrojone jabłka.
                      3. Piecz w piekarniku przez 1,5 godziny w temperaturze 180°C.
                      4. Podawaj z pieczonymi jabłkami i sosie z pieczenia.',
                'diet' => null,
                'time' => RecipeTime::LONG,
                'ingredients' => [
                    ['name' => 'kaczka', 'quantity' => 1000],
                    ['name' => 'jabłko', 'quantity' => 2],
                    ['name' => 'sól', 'quantity' => 10],
                    ['name' => 'pieprz', 'quantity' => 5],
                    ['name' => 'rozmaryn', 'quantity' => 5],
                    ['name' => 'tymianek', 'quantity' => 5],
                ],
                'image_path' => 'recipes/roasted-duck-apples.jpg',
            ],
            [                'name' => '1ABC2 Omlet z Serem i Szpinakiem',
                'description' => 'Puszysty omlet z serem, świeżym szpinakiem i cebulą.',
                'instruction' => '1. Roztrzep jajka w misce, dodaj posiekany szpinak i cebulę.
                      2. Na patelni rozgrzej masło i wlej masę jajeczną.
                      3. Posyp startym serem i smaż na małym ogniu do zastygnięcia.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'jajko', 'quantity' => 2],
                    ['name' => 'ser', 'quantity' => 30],
                    ['name' => 'szpinak', 'quantity' => 50],
                    ['name' => 'cebula', 'quantity' => 1],
                    ['name' => 'masło', 'quantity' => 10],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/spinach-cheese-omelette.jpg',
            ],
            [                'name' => '1ABC2 Koktajl Truskawkowy z Bananem',
                'description' => 'Orzeźwiający koktajl z truskawkami, bananem i jogurtem.',
                'instruction' => '1. W blenderze połącz truskawki, banana, jogurt i miód.
                      2. Miksuj do uzyskania gładkiego koktajlu.
                      3. Podawaj schłodzone z plasterkiem pomarańczy.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'truskawka', 'quantity' => 20],
                    ['name' => 'banan', 'quantity' => 1],
                    ['name' => 'jogurt', 'quantity' => 150],
                    ['name' => 'miód', 'quantity' => 10],
                    ['name' => 'pomarańcza', 'quantity' => 1],
                ],
                'image_path' => 'recipes/strawberry-banana-smoothie.jpg',
            ],
            [                'name' => '1ABC2 Sałatka Grecka',
                'description' => 'Klasyczna sałatka grecka z pomidorem, ogórkiem, oliwkami i fetą.',
                'instruction' => '1. Pokrój pomidory, ogórki i cebulę.
                      2. Dodaj oliwki i pokruszoną fetę.
                      3. Skrop oliwą z oliwek, dopraw solą i pieprzem.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'pomidor', 'quantity' => 2],
                    ['name' => 'ogórek', 'quantity' => 1],
                    ['name' => 'cebula', 'quantity' => 1],
                    ['name' => 'oliwki', 'quantity' => 30],
                    ['name' => 'ser feta', 'quantity' => 30],
                    ['name' => 'oliwa z oliwek', 'quantity' => 15],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/greek-salad.jpg',
            ],
            [                'name' => '1ABC2 Kremowa Zupa Brokułowa',
                'description' => 'Delikatna zupa kremowa z soczystym brokułem i serem parmezan.',
                'instruction' => '1. Gotuj brokuły na parze do miękkości.
                      2. Rozblenduj je z gorącym mlekiem i serem parmezan.
                      3. Dopraw solą i pieprzem, podawaj z grzankami.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'brokuł', 'quantity' => 1],
                    ['name' => 'mleko', 'quantity' => 200],
                    ['name' => 'ser parmezan', 'quantity' => 30],
                    ['name' => 'grzanki', 'quantity' => 50],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/cream-of-broccoli-soup.jpg',
            ],
            [                'name' => '1ABC2 Kotlety Schabowe',
                'description' => 'Tradycyjne kotlety schabowe smażone na maśle klarowanym.',
                'instruction' => '1. Rozbij kotlety schabowe, dopraw solą i pieprzem.
                      2. Obtocz w mące, jajku i bułce tartej.
                      3. Smaż na maśle klarowanym z obu stron do zarumienienia.',
                'diet' => null,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'kotlet schabowy', 'quantity' => 2],
                    ['name' => 'masło', 'quantity' => 30],
                    ['name' => 'mąka', 'quantity' => 30],
                    ['name' => 'jajko', 'quantity' => 1],
                    ['name' => 'bułka tarta', 'quantity' => 30],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/pork-cutlets.jpg',
            ],
            [                'name' => '1ABC2 Sałatka z Komosą Ryżową',
                'description' => 'Zdrowa sałatka z komosą ryżową, pieczonymi warzywami i sosem jogurtowym.',
                'instruction' => '1. Ugotuj komosę ryżową według instrukcji na opakowaniu.
                      2. Piecz warzywa (np. batata, paprykę, cukinię) z odrobiną oliwy.
                      3. Połącz komosę ryżową, warzywa.
                      4. Skrop sosem jogurtowym i podawaj.',
                'diet' => RecipeDiet::VEGAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'komosa ryżowa', 'quantity' => 100],
                    ['name' => 'batat', 'quantity' => 1],
                    ['name' => 'papryka', 'quantity' => 1],
                    ['name' => 'cukinia', 'quantity' => 1],
                    ['name' => 'oliwa z oliwek', 'quantity' => 15],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                    ['name' => 'jogurt', 'quantity' => 30],
                ],
                'image_path' => 'recipes/quinoa-veggie-salad.jpg',
            ],
            [                'name' => '1ABC2 Krem z Dyni',
                'description' => 'Delikatny krem z dyni z nutą cynamonu i orzechów.',
                'instruction' => '1. Upiecz kawałki dyni w piekarniku.
                      2. Rozblenduj dynię z ciepłym mlekiem roślinnym.
                      3. Dodaj cynamon, orzechy i sól. Podawaj gorący.',
                'diet' => RecipeDiet::VEGAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'dynia', 'quantity' => 200],
                    ['name' => 'mleko owsiane', 'quantity' => 200],
                    ['name' => 'cynamon', 'quantity' => 5],
                    ['name' => 'orzechy włoskie', 'quantity' => 10],
                    ['name' => 'sól', 'quantity' => 5],
                ],
                'image_path' => 'recipes/pumpkin-soup.jpg',
            ],
            [                'name' => '2Kremowy Kurczak z Pieczarkami',
                'description' => 'Delikatne kawałki kurczaka w kremowym sosie z pieczarkami.',
                'instruction' => '1. Na patelni rozgrzej olej i zrumień kawałki kurczaka.
                      2. Dodaj posiekane pieczarki i smaż do zmiękczenia.
                      3. Wlej śmietankę i gotuj na małym ogniu przez 10 minut.
                      4. Dopraw solą, pieprzem i posyp posiekanym koperkiem.',
                'diet' => null,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'pierś z kurczaka', 'quantity' => 300],
                    ['name' => 'olej roślinny', 'quantity' => 30],
                    ['name' => 'pieczarki', 'quantity' => 200],
                    ['name' => 'śmietanka do kawy', 'quantity' => 200],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                    ['name' => 'koperek', 'quantity' => 10],
                ],
                'image_path' => 'recipes/creamy-chicken-mushrooms.jpg',
            ],
            [                'name' => '2Sałatka z Grilowanym Łososiem',
                'description' => 'Klasyczna sałatka Cezar z dodatkiem soczystego grilowanego łososia.',
                'instruction' => '1. Griluj filet łososia przez 4 minuty z każdej strony.
                      2. Na talerzu ułóż sałatę, pokrojonego łososia, posyp parmezanem.
                      3. Polej sosem Cezar i udekoruj kawałkami grzanki.',
                'diet' => null,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'filet z łososia', 'quantity' => 150],
                    ['name' => 'ser parmezan', 'quantity' => 30],
                    ['name' => 'sałata', 'quantity' => 100],
                    ['name' => 'grzanki', 'quantity' => 50],
                ],
                'image_path' => 'recipes/caesar-salad-salmon.jpg',
            ],
            [                'name' => '2Wegetariańskie Curry z Batatem',
                'description' => 'Pikantne wegetariańskie curry z batatem, ciecierzycą i szpinakiem.',
                'instruction' => '1. W garnku podsmaż czosnek i cebulę na oleju.
                      2. Dodaj pokrojonego w kostkę batata, ciecierzycę i przyprawy curry.
                      3. Wlej mleko kokosowe i gotuj do miękkości batata.
                      4. Na końcu dodaj szpinak i gotuj jeszcze 3 minuty.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::LONG,
                'ingredients' => [
                    ['name' => 'batat', 'quantity' => 200],
                    ['name' => 'ciecierzyca', 'quantity' => 150],
                    ['name' => 'szpinak', 'quantity' => 100],
                    ['name' => 'mleko', 'quantity' => 200],
                    ['name' => 'olej roślinny', 'quantity' => 30],
                    ['name' => 'czosnek', 'quantity' => 10],
                ],
                'image_path' => 'recipes/vegetarian-curry-sweet-potato.jpg',
            ],
            [                'name' => '2Makaron Penne z Sosem Serowym',
                'description' => 'Kremowy makaron penne w bogatym sosie serowym.',
                'instruction' => '1. Ugotuj makaron penne al dente.
                      2. Na patelni rozpuść masło, dodaj śmietanę i ser, mieszając do uzyskania gładkiego sosu.
                      3. Dodaj ugotowany makaron do sosu, mieszaj i podawaj z posiekaną bazylią.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'penne', 'quantity' => 200],
                    ['name' => 'masło', 'quantity' => 30],
                    ['name' => 'śmietana kremówka', 'quantity' => 100],
                    ['name' => 'ser', 'quantity' => 50],
                    ['name' => 'bazylia', 'quantity' => 5],
                ],
                'image_path' => 'recipes/penne-cheese-sauce.jpg',
            ],
            [                'name' => '2Pieczona Kaczka z Jabłkami',
                'description' => 'Soczysta pieczona kaczka z jabłkami i ziołami.',
                'instruction' => '1. Kaczkę natrzyj solą, pieprzem i ziołami.
                      2. Włóż do środka pokrojone jabłka.
                      3. Piecz w piekarniku przez 1,5 godziny w temperaturze 180°C.
                      4. Podawaj z pieczonymi jabłkami i sosie z pieczenia.',
                'diet' => null,
                'time' => RecipeTime::LONG,
                'ingredients' => [
                    ['name' => 'kaczka', 'quantity' => 1000],
                    ['name' => 'jabłko', 'quantity' => 2],
                    ['name' => 'sól', 'quantity' => 10],
                    ['name' => 'pieprz', 'quantity' => 5],
                    ['name' => 'rozmaryn', 'quantity' => 5],
                    ['name' => 'tymianek', 'quantity' => 5],
                ],
                'image_path' => 'recipes/roasted-duck-apples.jpg',
            ],
            [                'name' => '2Omlet z Serem i Szpinakiem',
                'description' => 'Puszysty omlet z serem, świeżym szpinakiem i cebulą.',
                'instruction' => '1. Roztrzep jajka w misce, dodaj posiekany szpinak i cebulę.
                      2. Na patelni rozgrzej masło i wlej masę jajeczną.
                      3. Posyp startym serem i smaż na małym ogniu do zastygnięcia.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'jajko', 'quantity' => 2],
                    ['name' => 'ser', 'quantity' => 30],
                    ['name' => 'szpinak', 'quantity' => 50],
                    ['name' => 'cebula', 'quantity' => 1],
                    ['name' => 'masło', 'quantity' => 10],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/spinach-cheese-omelette.jpg',
            ],
            [                'name' => '2Koktajl Truskawkowy z Bananem',
                'description' => 'Orzeźwiający koktajl z truskawkami, bananem i jogurtem.',
                'instruction' => '1. W blenderze połącz truskawki, banana, jogurt i miód.
                      2. Miksuj do uzyskania gładkiego koktajlu.
                      3. Podawaj schłodzone z plasterkiem pomarańczy.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'truskawka', 'quantity' => 20],
                    ['name' => 'banan', 'quantity' => 1],
                    ['name' => 'jogurt', 'quantity' => 150],
                    ['name' => 'miód', 'quantity' => 10],
                    ['name' => 'pomarańcza', 'quantity' => 1],
                ],
                'image_path' => 'recipes/strawberry-banana-smoothie.jpg',
            ],
            [                'name' => '2Sałatka Grecka',
                'description' => 'Klasyczna sałatka grecka z pomidorem, ogórkiem, oliwkami i fetą.',
                'instruction' => '1. Pokrój pomidory, ogórki i cebulę.
                      2. Dodaj oliwki i pokruszoną fetę.
                      3. Skrop oliwą z oliwek, dopraw solą i pieprzem.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'pomidor', 'quantity' => 2],
                    ['name' => 'ogórek', 'quantity' => 1],
                    ['name' => 'cebula', 'quantity' => 1],
                    ['name' => 'oliwki', 'quantity' => 30],
                    ['name' => 'ser feta', 'quantity' => 30],
                    ['name' => 'oliwa z oliwek', 'quantity' => 15],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/greek-salad.jpg',
            ],
            [                'name' => '2Kremowa Zupa Brokułowa',
                'description' => 'Delikatna zupa kremowa z soczystym brokułem i serem parmezan.',
                'instruction' => '1. Gotuj brokuły na parze do miękkości.
                      2. Rozblenduj je z gorącym mlekiem i serem parmezan.
                      3. Dopraw solą i pieprzem, podawaj z grzankami.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'brokuł', 'quantity' => 1],
                    ['name' => 'mleko', 'quantity' => 200],
                    ['name' => 'ser parmezan', 'quantity' => 30],
                    ['name' => 'grzanki', 'quantity' => 50],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/cream-of-broccoli-soup.jpg',
            ],
            [                'name' => '2Kotlety Schabowe',
                'description' => 'Tradycyjne kotlety schabowe smażone na maśle klarowanym.',
                'instruction' => '1. Rozbij kotlety schabowe, dopraw solą i pieprzem.
                      2. Obtocz w mące, jajku i bułce tartej.
                      3. Smaż na maśle klarowanym z obu stron do zarumienienia.',
                'diet' => null,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'kotlet schabowy', 'quantity' => 2],
                    ['name' => 'masło', 'quantity' => 30],
                    ['name' => 'mąka', 'quantity' => 30],
                    ['name' => 'jajko', 'quantity' => 1],
                    ['name' => 'bułka tarta', 'quantity' => 30],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/pork-cutlets.jpg',
            ],
            [                'name' => '2Sałatka z Komosą Ryżową',
                'description' => 'Zdrowa sałatka z komosą ryżową, pieczonymi warzywami i sosem jogurtowym.',
                'instruction' => '1. Ugotuj komosę ryżową według instrukcji na opakowaniu.
                      2. Piecz warzywa (np. batata, paprykę, cukinię) z odrobiną oliwy.
                      3. Połącz komosę ryżową, warzywa.
                      4. Skrop sosem jogurtowym i podawaj.',
                'diet' => RecipeDiet::VEGAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'komosa ryżowa', 'quantity' => 100],
                    ['name' => 'batat', 'quantity' => 1],
                    ['name' => 'papryka', 'quantity' => 1],
                    ['name' => 'cukinia', 'quantity' => 1],
                    ['name' => 'oliwa z oliwek', 'quantity' => 15],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                    ['name' => 'jogurt', 'quantity' => 30],
                ],
                'image_path' => 'recipes/quinoa-veggie-salad.jpg',
            ],
            [                'name' => '2Krem z Dyni',
                'description' => 'Delikatny krem z dyni z nutą cynamonu i orzechów.',
                'instruction' => '1. Upiecz kawałki dyni w piekarniku.
                      2. Rozblenduj dynię z ciepłym mlekiem roślinnym.
                      3. Dodaj cynamon, orzechy i sól. Podawaj gorący.',
                'diet' => RecipeDiet::VEGAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'dynia', 'quantity' => 200],
                    ['name' => 'mleko owsiane', 'quantity' => 200],
                    ['name' => 'cynamon', 'quantity' => 5],
                    ['name' => 'orzechy włoskie', 'quantity' => 10],
                    ['name' => 'sól', 'quantity' => 5],
                ],
                'image_path' => 'recipes/pumpkin-soup.jpg',
            ],
            [                'name' => '2Kasza Jaglana z Warzywami',
                'description' => 'Kasza jaglana z duszonymi warzywami i sosie pomidorowym.',
                'instruction' => '1. Ugotuj kaszę jaglaną zgodnie z instrukcją.
                      2. Podsmaż cebulę i czosnek, dodaj pokrojone warzywa (np. cukinię, paprykę).
                      3. Dodaj sos pomidorowy i dusz warzywa.
                      4. Podawaj z ugotowaną kaszą.',
                'diet' => RecipeDiet::VEGAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'kasza jaglana', 'quantity' => 100],
                    ['name' => 'cebula', 'quantity' => 1],
                    ['name' => 'czosnek', 'quantity' => 2],
                    ['name' => 'cukinia', 'quantity' => 1],
                    ['name' => 'papryka', 'quantity' => 1],
                    ['name' => 'pomidor', 'quantity' => 2],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/buckwheat-vegetable-stir-fry.jpg',
            ],
            [                'name' => '2XYZ Kasza Jaglana z Warzywami',
                'description' => 'Kasza jaglana z duszonymi warzywami i sosie pomidorowym.',
                'instruction' => '1. Ugotuj kaszę jaglaną zgodnie z instrukcją.
                      2. Podsmaż cebulę i czosnek, dodaj pokrojone warzywa (np. cukinię, paprykę).
                      3. Dodaj sos pomidorowy i dusz warzywa.
                      4. Podawaj z ugotowaną kaszą.',
                'diet' => RecipeDiet::VEGAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'kasza jaglana', 'quantity' => 100],
                    ['name' => 'cebula', 'quantity' => 1],
                    ['name' => 'czosnek', 'quantity' => 2],
                    ['name' => 'cukinia', 'quantity' => 1],
                    ['name' => 'papryka', 'quantity' => 1],
                    ['name' => 'pomidor', 'quantity' => 2],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/buckwheat-vegetable-stir-fry.jpg',
            ],
            [                'name' => '2XYZ Kremowy Kurczak z Pieczarkami',
                'description' => 'Delikatne kawałki kurczaka w kremowym sosie z pieczarkami.',
                'instruction' => '1. Na patelni rozgrzej olej i zrumień kawałki kurczaka.
                      2. Dodaj posiekane pieczarki i smaż do zmiękczenia.
                      3. Wlej śmietankę i gotuj na małym ogniu przez 10 minut.
                      4. Dopraw solą, pieprzem i posyp posiekanym koperkiem.',
                'diet' => null,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'pierś z kurczaka', 'quantity' => 300],
                    ['name' => 'olej roślinny', 'quantity' => 30],
                    ['name' => 'pieczarki', 'quantity' => 200],
                    ['name' => 'śmietanka do kawy', 'quantity' => 200],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                    ['name' => 'koperek', 'quantity' => 10],
                ],
                'image_path' => 'recipes/creamy-chicken-mushrooms.jpg',
            ],
            [                'name' => '2XYZ Sałatka z Grilowanym Łososiem',
                'description' => 'Klasyczna sałatka Cezar z dodatkiem soczystego grilowanego łososia.',
                'instruction' => '1. Griluj filet łososia przez 4 minuty z każdej strony.
                      2. Na talerzu ułóż sałatę, pokrojonego łososia, posyp parmezanem.
                      3. Polej sosem Cezar i udekoruj kawałkami grzanki.',
                'diet' => null,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'filet z łososia', 'quantity' => 150],
                    ['name' => 'ser parmezan', 'quantity' => 30],
                    ['name' => 'sałata', 'quantity' => 100],
                    ['name' => 'grzanki', 'quantity' => 50],
                ],
                'image_path' => 'recipes/caesar-salad-salmon.jpg',
            ],
            [                'name' => '2XYZ Wegetariańskie Curry z Batatem',
                'description' => 'Pikantne wegetariańskie curry z batatem, ciecierzycą i szpinakiem.',
                'instruction' => '1. W garnku podsmaż czosnek i cebulę na oleju.
                      2. Dodaj pokrojonego w kostkę batata, ciecierzycę i przyprawy curry.
                      3. Wlej mleko kokosowe i gotuj do miękkości batata.
                      4. Na końcu dodaj szpinak i gotuj jeszcze 3 minuty.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::LONG,
                'ingredients' => [
                    ['name' => 'batat', 'quantity' => 200],
                    ['name' => 'ciecierzyca', 'quantity' => 150],
                    ['name' => 'szpinak', 'quantity' => 100],
                    ['name' => 'mleko', 'quantity' => 200],
                    ['name' => 'olej roślinny', 'quantity' => 30],
                    ['name' => 'czosnek', 'quantity' => 10],
                ],
                'image_path' => 'recipes/vegetarian-curry-sweet-potato.jpg',
            ],
            [                'name' => '2XYZ Makaron Penne z Sosem Serowym',
                'description' => 'Kremowy makaron penne w bogatym sosie serowym.',
                'instruction' => '1. Ugotuj makaron penne al dente.
                      2. Na patelni rozpuść masło, dodaj śmietanę i ser, mieszając do uzyskania gładkiego sosu.
                      3. Dodaj ugotowany makaron do sosu, mieszaj i podawaj z posiekaną bazylią.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'penne', 'quantity' => 200],
                    ['name' => 'masło', 'quantity' => 30],
                    ['name' => 'śmietana kremówka', 'quantity' => 100],
                    ['name' => 'ser', 'quantity' => 50],
                    ['name' => 'bazylia', 'quantity' => 5],
                ],
                'image_path' => 'recipes/penne-cheese-sauce.jpg',
            ],
            [                'name' => '2XYZ Pieczona Kaczka z Jabłkami',
                'description' => 'Soczysta pieczona kaczka z jabłkami i ziołami.',
                'instruction' => '1. Kaczkę natrzyj solą, pieprzem i ziołami.
                      2. Włóż do środka pokrojone jabłka.
                      3. Piecz w piekarniku przez 1,5 godziny w temperaturze 180°C.
                      4. Podawaj z pieczonymi jabłkami i sosie z pieczenia.',
                'diet' => null,
                'time' => RecipeTime::LONG,
                'ingredients' => [
                    ['name' => 'kaczka', 'quantity' => 1000],
                    ['name' => 'jabłko', 'quantity' => 2],
                    ['name' => 'sól', 'quantity' => 10],
                    ['name' => 'pieprz', 'quantity' => 5],
                    ['name' => 'rozmaryn', 'quantity' => 5],
                    ['name' => 'tymianek', 'quantity' => 5],
                ],
                'image_path' => 'recipes/roasted-duck-apples.jpg',
            ],
            [                'name' => '2XYZ Omlet z Serem i Szpinakiem',
                'description' => 'Puszysty omlet z serem, świeżym szpinakiem i cebulą.',
                'instruction' => '1. Roztrzep jajka w misce, dodaj posiekany szpinak i cebulę.
                      2. Na patelni rozgrzej masło i wlej masę jajeczną.
                      3. Posyp startym serem i smaż na małym ogniu do zastygnięcia.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'jajko', 'quantity' => 2],
                    ['name' => 'ser', 'quantity' => 30],
                    ['name' => 'szpinak', 'quantity' => 50],
                    ['name' => 'cebula', 'quantity' => 1],
                    ['name' => 'masło', 'quantity' => 10],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/spinach-cheese-omelette.jpg',
            ],
            [                'name' => '2XYZ Koktajl Truskawkowy z Bananem',
                'description' => 'Orzeźwiający koktajl z truskawkami, bananem i jogurtem.',
                'instruction' => '1. W blenderze połącz truskawki, banana, jogurt i miód.
                      2. Miksuj do uzyskania gładkiego koktajlu.
                      3. Podawaj schłodzone z plasterkiem pomarańczy.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'truskawka', 'quantity' => 20],
                    ['name' => 'banan', 'quantity' => 1],
                    ['name' => 'jogurt', 'quantity' => 150],
                    ['name' => 'miód', 'quantity' => 10],
                    ['name' => 'pomarańcza', 'quantity' => 1],
                ],
                'image_path' => 'recipes/strawberry-banana-smoothie.jpg',
            ],
            [                'name' => '2XYZ Sałatka Grecka',
                'description' => 'Klasyczna sałatka grecka z pomidorem, ogórkiem, oliwkami i fetą.',
                'instruction' => '1. Pokrój pomidory, ogórki i cebulę.
                      2. Dodaj oliwki i pokruszoną fetę.
                      3. Skrop oliwą z oliwek, dopraw solą i pieprzem.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'pomidor', 'quantity' => 2],
                    ['name' => 'ogórek', 'quantity' => 1],
                    ['name' => 'cebula', 'quantity' => 1],
                    ['name' => 'oliwki', 'quantity' => 30],
                    ['name' => 'ser feta', 'quantity' => 30],
                    ['name' => 'oliwa z oliwek', 'quantity' => 15],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/greek-salad.jpg',
            ],
            [                'name' => '2XYZ Kremowa Zupa Brokułowa',
                'description' => 'Delikatna zupa kremowa z soczystym brokułem i serem parmezan.',
                'instruction' => '1. Gotuj brokuły na parze do miękkości.
                      2. Rozblenduj je z gorącym mlekiem i serem parmezan.
                      3. Dopraw solą i pieprzem, podawaj z grzankami.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'brokuł', 'quantity' => 1],
                    ['name' => 'mleko', 'quantity' => 200],
                    ['name' => 'ser parmezan', 'quantity' => 30],
                    ['name' => 'grzanki', 'quantity' => 50],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/cream-of-broccoli-soup.jpg',
            ],
            [                'name' => '2XYZ Kotlety Schabowe',
                'description' => 'Tradycyjne kotlety schabowe smażone na maśle klarowanym.',
                'instruction' => '1. Rozbij kotlety schabowe, dopraw solą i pieprzem.
                      2. Obtocz w mące, jajku i bułce tartej.
                      3. Smaż na maśle klarowanym z obu stron do zarumienienia.',
                'diet' => null,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'kotlet schabowy', 'quantity' => 2],
                    ['name' => 'masło', 'quantity' => 30],
                    ['name' => 'mąka', 'quantity' => 30],
                    ['name' => 'jajko', 'quantity' => 1],
                    ['name' => 'bułka tarta', 'quantity' => 30],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/pork-cutlets.jpg',
            ],
            [                'name' => '2XYZ Sałatka z Komosą Ryżową',
                'description' => 'Zdrowa sałatka z komosą ryżową, pieczonymi warzywami i sosem jogurtowym.',
                'instruction' => '1. Ugotuj komosę ryżową według instrukcji na opakowaniu.
                      2. Piecz warzywa (np. batata, paprykę, cukinię) z odrobiną oliwy.
                      3. Połącz komosę ryżową, warzywa.
                      4. Skrop sosem jogurtowym i podawaj.',
                'diet' => RecipeDiet::VEGAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'komosa ryżowa', 'quantity' => 100],
                    ['name' => 'batat', 'quantity' => 1],
                    ['name' => 'papryka', 'quantity' => 1],
                    ['name' => 'cukinia', 'quantity' => 1],
                    ['name' => 'oliwa z oliwek', 'quantity' => 15],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                    ['name' => 'jogurt', 'quantity' => 30],
                ],
                'image_path' => 'recipes/quinoa-veggie-salad.jpg',
            ],
            [                'name' => '2XYZ Krem z Dyni',
                'description' => 'Delikatny krem z dyni z nutą cynamonu i orzechów.',
                'instruction' => '1. Upiecz kawałki dyni w piekarniku.
                      2. Rozblenduj dynię z ciepłym mlekiem roślinnym.
                      3. Dodaj cynamon, orzechy i sól. Podawaj gorący.',
                'diet' => RecipeDiet::VEGAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'dynia', 'quantity' => 200],
                    ['name' => 'mleko owsiane', 'quantity' => 200],
                    ['name' => 'cynamon', 'quantity' => 5],
                    ['name' => 'orzechy włoskie', 'quantity' => 10],
                    ['name' => 'sól', 'quantity' => 5],
                ],
                'image_path' => 'recipes/pumpkin-soup.jpg',
            ],
            [                'name' => '2ABC1 Kasza Jaglana z Warzywami',
                'description' => 'Kasza jaglana z duszonymi warzywami i sosie pomidorowym.',
                'instruction' => '1. Ugotuj kaszę jaglaną zgodnie z instrukcją.
                      2. Podsmaż cebulę i czosnek, dodaj pokrojone warzywa (np. cukinię, paprykę).
                      3. Dodaj sos pomidorowy i dusz warzywa.
                      4. Podawaj z ugotowaną kaszą.',
                'diet' => RecipeDiet::VEGAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'kasza jaglana', 'quantity' => 100],
                    ['name' => 'cebula', 'quantity' => 1],
                    ['name' => 'czosnek', 'quantity' => 2],
                    ['name' => 'cukinia', 'quantity' => 1],
                    ['name' => 'papryka', 'quantity' => 1],
                    ['name' => 'pomidor', 'quantity' => 2],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/buckwheat-vegetable-stir-fry.jpg',
            ],
            [                'name' => '2ABC1 Kremowy Kurczak z Pieczarkami',
                'description' => 'Delikatne kawałki kurczaka w kremowym sosie z pieczarkami.',
                'instruction' => '1. Na patelni rozgrzej olej i zrumień kawałki kurczaka.
                      2. Dodaj posiekane pieczarki i smaż do zmiękczenia.
                      3. Wlej śmietankę i gotuj na małym ogniu przez 10 minut.
                      4. Dopraw solą, pieprzem i posyp posiekanym koperkiem.',
                'diet' => null,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'pierś z kurczaka', 'quantity' => 300],
                    ['name' => 'olej roślinny', 'quantity' => 30],
                    ['name' => 'pieczarki', 'quantity' => 200],
                    ['name' => 'śmietanka do kawy', 'quantity' => 200],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                    ['name' => 'koperek', 'quantity' => 10],
                ],
                'image_path' => 'recipes/creamy-chicken-mushrooms.jpg',
            ],
            [                'name' => '2ABC1 Sałatka z Grilowanym Łososiem',
                'description' => 'Klasyczna sałatka Cezar z dodatkiem soczystego grilowanego łososia.',
                'instruction' => '1. Griluj filet łososia przez 4 minuty z każdej strony.
                      2. Na talerzu ułóż sałatę, pokrojonego łososia, posyp parmezanem.
                      3. Polej sosem Cezar i udekoruj kawałkami grzanki.',
                'diet' => null,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'filet z łososia', 'quantity' => 150],
                    ['name' => 'ser parmezan', 'quantity' => 30],
                    ['name' => 'sałata', 'quantity' => 100],
                    ['name' => 'grzanki', 'quantity' => 50],
                ],
                'image_path' => 'recipes/caesar-salad-salmon.jpg',
            ],
            [                'name' => '2ABC1 Wegetariańskie Curry z Batatem',
                'description' => 'Pikantne wegetariańskie curry z batatem, ciecierzycą i szpinakiem.',
                'instruction' => '1. W garnku podsmaż czosnek i cebulę na oleju.
                      2. Dodaj pokrojonego w kostkę batata, ciecierzycę i przyprawy curry.
                      3. Wlej mleko kokosowe i gotuj do miękkości batata.
                      4. Na końcu dodaj szpinak i gotuj jeszcze 3 minuty.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::LONG,
                'ingredients' => [
                    ['name' => 'batat', 'quantity' => 200],
                    ['name' => 'ciecierzyca', 'quantity' => 150],
                    ['name' => 'szpinak', 'quantity' => 100],
                    ['name' => 'mleko', 'quantity' => 200],
                    ['name' => 'olej roślinny', 'quantity' => 30],
                    ['name' => 'czosnek', 'quantity' => 10],
                ],
                'image_path' => 'recipes/vegetarian-curry-sweet-potato.jpg',
            ],
            [                'name' => '2ABC1 Makaron Penne z Sosem Serowym',
                'description' => 'Kremowy makaron penne w bogatym sosie serowym.',
                'instruction' => '1. Ugotuj makaron penne al dente.
                      2. Na patelni rozpuść masło, dodaj śmietanę i ser, mieszając do uzyskania gładkiego sosu.
                      3. Dodaj ugotowany makaron do sosu, mieszaj i podawaj z posiekaną bazylią.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'penne', 'quantity' => 200],
                    ['name' => 'masło', 'quantity' => 30],
                    ['name' => 'śmietana kremówka', 'quantity' => 100],
                    ['name' => 'ser', 'quantity' => 50],
                    ['name' => 'bazylia', 'quantity' => 5],
                ],
                'image_path' => 'recipes/penne-cheese-sauce.jpg',
            ],
            [                'name' => '2ABC1 Pieczona Kaczka z Jabłkami',
                'description' => 'Soczysta pieczona kaczka z jabłkami i ziołami.',
                'instruction' => '1. Kaczkę natrzyj solą, pieprzem i ziołami.
                      2. Włóż do środka pokrojone jabłka.
                      3. Piecz w piekarniku przez 1,5 godziny w temperaturze 180°C.
                      4. Podawaj z pieczonymi jabłkami i sosie z pieczenia.',
                'diet' => null,
                'time' => RecipeTime::LONG,
                'ingredients' => [
                    ['name' => 'kaczka', 'quantity' => 1000],
                    ['name' => 'jabłko', 'quantity' => 2],
                    ['name' => 'sól', 'quantity' => 10],
                    ['name' => 'pieprz', 'quantity' => 5],
                    ['name' => 'rozmaryn', 'quantity' => 5],
                    ['name' => 'tymianek', 'quantity' => 5],
                ],
                'image_path' => 'recipes/roasted-duck-apples.jpg',
            ],
            [                'name' => '2ABC1 Omlet z Serem i Szpinakiem',
                'description' => 'Puszysty omlet z serem, świeżym szpinakiem i cebulą.',
                'instruction' => '1. Roztrzep jajka w misce, dodaj posiekany szpinak i cebulę.
                      2. Na patelni rozgrzej masło i wlej masę jajeczną.
                      3. Posyp startym serem i smaż na małym ogniu do zastygnięcia.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'jajko', 'quantity' => 2],
                    ['name' => 'ser', 'quantity' => 30],
                    ['name' => 'szpinak', 'quantity' => 50],
                    ['name' => 'cebula', 'quantity' => 1],
                    ['name' => 'masło', 'quantity' => 10],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/spinach-cheese-omelette.jpg',
            ],
            [                'name' => '2ABC1 Koktajl Truskawkowy z Bananem',
                'description' => 'Orzeźwiający koktajl z truskawkami, bananem i jogurtem.',
                'instruction' => '1. W blenderze połącz truskawki, banana, jogurt i miód.
                      2. Miksuj do uzyskania gładkiego koktajlu.
                      3. Podawaj schłodzone z plasterkiem pomarańczy.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'truskawka', 'quantity' => 20],
                    ['name' => 'banan', 'quantity' => 1],
                    ['name' => 'jogurt', 'quantity' => 150],
                    ['name' => 'miód', 'quantity' => 10],
                    ['name' => 'pomarańcza', 'quantity' => 1],
                ],
                'image_path' => 'recipes/strawberry-banana-smoothie.jpg',
            ],
            [                'name' => '2ABC1 Sałatka Grecka',
                'description' => 'Klasyczna sałatka grecka z pomidorem, ogórkiem, oliwkami i fetą.',
                'instruction' => '1. Pokrój pomidory, ogórki i cebulę.
                      2. Dodaj oliwki i pokruszoną fetę.
                      3. Skrop oliwą z oliwek, dopraw solą i pieprzem.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'pomidor', 'quantity' => 2],
                    ['name' => 'ogórek', 'quantity' => 1],
                    ['name' => 'cebula', 'quantity' => 1],
                    ['name' => 'oliwki', 'quantity' => 30],
                    ['name' => 'ser feta', 'quantity' => 30],
                    ['name' => 'oliwa z oliwek', 'quantity' => 15],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/greek-salad.jpg',
            ],
            [                'name' => '2ABC1 Kremowa Zupa Brokułowa',
                'description' => 'Delikatna zupa kremowa z soczystym brokułem i serem parmezan.',
                'instruction' => '1. Gotuj brokuły na parze do miękkości.
                      2. Rozblenduj je z gorącym mlekiem i serem parmezan.
                      3. Dopraw solą i pieprzem, podawaj z grzankami.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'brokuł', 'quantity' => 1],
                    ['name' => 'mleko', 'quantity' => 200],
                    ['name' => 'ser parmezan', 'quantity' => 30],
                    ['name' => 'grzanki', 'quantity' => 50],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/cream-of-broccoli-soup.jpg',
            ],
            [                'name' => '2ABC1 Kotlety Schabowe',
                'description' => 'Tradycyjne kotlety schabowe smażone na maśle klarowanym.',
                'instruction' => '1. Rozbij kotlety schabowe, dopraw solą i pieprzem.
                      2. Obtocz w mące, jajku i bułce tartej.
                      3. Smaż na maśle klarowanym z obu stron do zarumienienia.',
                'diet' => null,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'kotlet schabowy', 'quantity' => 2],
                    ['name' => 'masło', 'quantity' => 30],
                    ['name' => 'mąka', 'quantity' => 30],
                    ['name' => 'jajko', 'quantity' => 1],
                    ['name' => 'bułka tarta', 'quantity' => 30],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/pork-cutlets.jpg',
            ],
            [                'name' => '2ABC1 Sałatka z Komosą Ryżową',
                'description' => 'Zdrowa sałatka z komosą ryżową, pieczonymi warzywami i sosem jogurtowym.',
                'instruction' => '1. Ugotuj komosę ryżową według instrukcji na opakowaniu.
                      2. Piecz warzywa (np. batata, paprykę, cukinię) z odrobiną oliwy.
                      3. Połącz komosę ryżową, warzywa.
                      4. Skrop sosem jogurtowym i podawaj.',
                'diet' => RecipeDiet::VEGAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'komosa ryżowa', 'quantity' => 100],
                    ['name' => 'batat', 'quantity' => 1],
                    ['name' => 'papryka', 'quantity' => 1],
                    ['name' => 'cukinia', 'quantity' => 1],
                    ['name' => 'oliwa z oliwek', 'quantity' => 15],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                    ['name' => 'jogurt', 'quantity' => 30],
                ],
                'image_path' => 'recipes/quinoa-veggie-salad.jpg',
            ],
            [                'name' => '2ABC1 Krem z Dyni',
                'description' => 'Delikatny krem z dyni z nutą cynamonu i orzechów.',
                'instruction' => '1. Upiecz kawałki dyni w piekarniku.
                      2. Rozblenduj dynię z ciepłym mlekiem roślinnym.
                      3. Dodaj cynamon, orzechy i sól. Podawaj gorący.',
                'diet' => RecipeDiet::VEGAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'dynia', 'quantity' => 200],
                    ['name' => 'mleko owsiane', 'quantity' => 200],
                    ['name' => 'cynamon', 'quantity' => 5],
                    ['name' => 'orzechy włoskie', 'quantity' => 10],
                    ['name' => 'sól', 'quantity' => 5],
                ],
                'image_path' => 'recipes/pumpkin-soup.jpg',
            ],
            [                'name' => '2ABC2 Kasza Jaglana z Warzywami',
                'description' => 'Kasza jaglana z duszonymi warzywami i sosie pomidorowym.',
                'instruction' => '1. Ugotuj kaszę jaglaną zgodnie z instrukcją.
                      2. Podsmaż cebulę i czosnek, dodaj pokrojone warzywa (np. cukinię, paprykę).
                      3. Dodaj sos pomidorowy i dusz warzywa.
                      4. Podawaj z ugotowaną kaszą.',
                'diet' => RecipeDiet::VEGAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'kasza jaglana', 'quantity' => 100],
                    ['name' => 'cebula', 'quantity' => 1],
                    ['name' => 'czosnek', 'quantity' => 2],
                    ['name' => 'cukinia', 'quantity' => 1],
                    ['name' => 'papryka', 'quantity' => 1],
                    ['name' => 'pomidor', 'quantity' => 2],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/buckwheat-vegetable-stir-fry.jpg',
            ],
            [                'name' => '2ABC2 Kremowy Kurczak z Pieczarkami',
                'description' => 'Delikatne kawałki kurczaka w kremowym sosie z pieczarkami.',
                'instruction' => '1. Na patelni rozgrzej olej i zrumień kawałki kurczaka.
                      2. Dodaj posiekane pieczarki i smaż do zmiękczenia.
                      3. Wlej śmietankę i gotuj na małym ogniu przez 10 minut.
                      4. Dopraw solą, pieprzem i posyp posiekanym koperkiem.',
                'diet' => null,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'pierś z kurczaka', 'quantity' => 300],
                    ['name' => 'olej roślinny', 'quantity' => 30],
                    ['name' => 'pieczarki', 'quantity' => 200],
                    ['name' => 'śmietanka do kawy', 'quantity' => 200],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                    ['name' => 'koperek', 'quantity' => 10],
                ],
                'image_path' => 'recipes/creamy-chicken-mushrooms.jpg',
            ],
            [                'name' => '2ABC2 Sałatka z Grilowanym Łososiem',
                'description' => 'Klasyczna sałatka Cezar z dodatkiem soczystego grilowanego łososia.',
                'instruction' => '1. Griluj filet łososia przez 4 minuty z każdej strony.
                      2. Na talerzu ułóż sałatę, pokrojonego łososia, posyp parmezanem.
                      3. Polej sosem Cezar i udekoruj kawałkami grzanki.',
                'diet' => null,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'filet z łososia', 'quantity' => 150],
                    ['name' => 'ser parmezan', 'quantity' => 30],
                    ['name' => 'sałata', 'quantity' => 100],
                    ['name' => 'grzanki', 'quantity' => 50],
                ],
                'image_path' => 'recipes/caesar-salad-salmon.jpg',
            ],
            [                'name' => '2ABC2 Wegetariańskie Curry z Batatem',
                'description' => 'Pikantne wegetariańskie curry z batatem, ciecierzycą i szpinakiem.',
                'instruction' => '1. W garnku podsmaż czosnek i cebulę na oleju.
                      2. Dodaj pokrojonego w kostkę batata, ciecierzycę i przyprawy curry.
                      3. Wlej mleko kokosowe i gotuj do miękkości batata.
                      4. Na końcu dodaj szpinak i gotuj jeszcze 3 minuty.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::LONG,
                'ingredients' => [
                    ['name' => 'batat', 'quantity' => 200],
                    ['name' => 'ciecierzyca', 'quantity' => 150],
                    ['name' => 'szpinak', 'quantity' => 100],
                    ['name' => 'mleko', 'quantity' => 200],
                    ['name' => 'olej roślinny', 'quantity' => 30],
                    ['name' => 'czosnek', 'quantity' => 10],
                ],
                'image_path' => 'recipes/vegetarian-curry-sweet-potato.jpg',
            ],
            [                'name' => '2ABC2 Makaron Penne z Sosem Serowym',
                'description' => 'Kremowy makaron penne w bogatym sosie serowym.',
                'instruction' => '1. Ugotuj makaron penne al dente.
                      2. Na patelni rozpuść masło, dodaj śmietanę i ser, mieszając do uzyskania gładkiego sosu.
                      3. Dodaj ugotowany makaron do sosu, mieszaj i podawaj z posiekaną bazylią.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'penne', 'quantity' => 200],
                    ['name' => 'masło', 'quantity' => 30],
                    ['name' => 'śmietana kremówka', 'quantity' => 100],
                    ['name' => 'ser', 'quantity' => 50],
                    ['name' => 'bazylia', 'quantity' => 5],
                ],
                'image_path' => 'recipes/penne-cheese-sauce.jpg',
            ],
            [                'name' => '2ABC2 Pieczona Kaczka z Jabłkami',
                'description' => 'Soczysta pieczona kaczka z jabłkami i ziołami.',
                'instruction' => '1. Kaczkę natrzyj solą, pieprzem i ziołami.
                      2. Włóż do środka pokrojone jabłka.
                      3. Piecz w piekarniku przez 1,5 godziny w temperaturze 180°C.
                      4. Podawaj z pieczonymi jabłkami i sosie z pieczenia.',
                'diet' => null,
                'time' => RecipeTime::LONG,
                'ingredients' => [
                    ['name' => 'kaczka', 'quantity' => 1000],
                    ['name' => 'jabłko', 'quantity' => 2],
                    ['name' => 'sól', 'quantity' => 10],
                    ['name' => 'pieprz', 'quantity' => 5],
                    ['name' => 'rozmaryn', 'quantity' => 5],
                    ['name' => 'tymianek', 'quantity' => 5],
                ],
                'image_path' => 'recipes/roasted-duck-apples.jpg',
            ],
            [                'name' => '2ABC2 Omlet z Serem i Szpinakiem',
                'description' => 'Puszysty omlet z serem, świeżym szpinakiem i cebulą.',
                'instruction' => '1. Roztrzep jajka w misce, dodaj posiekany szpinak i cebulę.
                      2. Na patelni rozgrzej masło i wlej masę jajeczną.
                      3. Posyp startym serem i smaż na małym ogniu do zastygnięcia.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'jajko', 'quantity' => 2],
                    ['name' => 'ser', 'quantity' => 30],
                    ['name' => 'szpinak', 'quantity' => 50],
                    ['name' => 'cebula', 'quantity' => 1],
                    ['name' => 'masło', 'quantity' => 10],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/spinach-cheese-omelette.jpg',
            ],
            [                'name' => '2ABC2 Koktajl Truskawkowy z Bananem',
                'description' => 'Orzeźwiający koktajl z truskawkami, bananem i jogurtem.',
                'instruction' => '1. W blenderze połącz truskawki, banana, jogurt i miód.
                      2. Miksuj do uzyskania gładkiego koktajlu.
                      3. Podawaj schłodzone z plasterkiem pomarańczy.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'truskawka', 'quantity' => 20],
                    ['name' => 'banan', 'quantity' => 1],
                    ['name' => 'jogurt', 'quantity' => 150],
                    ['name' => 'miód', 'quantity' => 10],
                    ['name' => 'pomarańcza', 'quantity' => 1],
                ],
                'image_path' => 'recipes/strawberry-banana-smoothie.jpg',
            ],
            [                'name' => '2ABC2 Sałatka Grecka',
                'description' => 'Klasyczna sałatka grecka z pomidorem, ogórkiem, oliwkami i fetą.',
                'instruction' => '1. Pokrój pomidory, ogórki i cebulę.
                      2. Dodaj oliwki i pokruszoną fetę.
                      3. Skrop oliwą z oliwek, dopraw solą i pieprzem.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'pomidor', 'quantity' => 2],
                    ['name' => 'ogórek', 'quantity' => 1],
                    ['name' => 'cebula', 'quantity' => 1],
                    ['name' => 'oliwki', 'quantity' => 30],
                    ['name' => 'ser feta', 'quantity' => 30],
                    ['name' => 'oliwa z oliwek', 'quantity' => 15],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/greek-salad.jpg',
            ],
            [                'name' => '2ABC2 Kremowa Zupa Brokułowa',
                'description' => 'Delikatna zupa kremowa z soczystym brokułem i serem parmezan.',
                'instruction' => '1. Gotuj brokuły na parze do miękkości.
                      2. Rozblenduj je z gorącym mlekiem i serem parmezan.
                      3. Dopraw solą i pieprzem, podawaj z grzankami.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'brokuł', 'quantity' => 1],
                    ['name' => 'mleko', 'quantity' => 200],
                    ['name' => 'ser parmezan', 'quantity' => 30],
                    ['name' => 'grzanki', 'quantity' => 50],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/cream-of-broccoli-soup.jpg',
            ],
            [                'name' => '2ABC2 Kotlety Schabowe',
                'description' => 'Tradycyjne kotlety schabowe smażone na maśle klarowanym.',
                'instruction' => '1. Rozbij kotlety schabowe, dopraw solą i pieprzem.
                      2. Obtocz w mące, jajku i bułce tartej.
                      3. Smaż na maśle klarowanym z obu stron do zarumienienia.',
                'diet' => null,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'kotlet schabowy', 'quantity' => 2],
                    ['name' => 'masło', 'quantity' => 30],
                    ['name' => 'mąka', 'quantity' => 30],
                    ['name' => 'jajko', 'quantity' => 1],
                    ['name' => 'bułka tarta', 'quantity' => 30],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/pork-cutlets.jpg',
            ],
            [                'name' => '2ABC2 Sałatka z Komosą Ryżową',
                'description' => 'Zdrowa sałatka z komosą ryżową, pieczonymi warzywami i sosem jogurtowym.',
                'instruction' => '1. Ugotuj komosę ryżową według instrukcji na opakowaniu.
                      2. Piecz warzywa (np. batata, paprykę, cukinię) z odrobiną oliwy.
                      3. Połącz komosę ryżową, warzywa.
                      4. Skrop sosem jogurtowym i podawaj.',
                'diet' => RecipeDiet::VEGAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'komosa ryżowa', 'quantity' => 100],
                    ['name' => 'batat', 'quantity' => 1],
                    ['name' => 'papryka', 'quantity' => 1],
                    ['name' => 'cukinia', 'quantity' => 1],
                    ['name' => 'oliwa z oliwek', 'quantity' => 15],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                    ['name' => 'jogurt', 'quantity' => 30],
                ],
                'image_path' => 'recipes/quinoa-veggie-salad.jpg',
            ],
            [                'name' => '2ABC2 Krem z Dyni',
                'description' => 'Delikatny krem z dyni z nutą cynamonu i orzechów.',
                'instruction' => '1. Upiecz kawałki dyni w piekarniku.
                      2. Rozblenduj dynię z ciepłym mlekiem roślinnym.
                      3. Dodaj cynamon, orzechy i sól. Podawaj gorący.',
                'diet' => RecipeDiet::VEGAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'dynia', 'quantity' => 200],
                    ['name' => 'mleko owsiane', 'quantity' => 200],
                    ['name' => 'cynamon', 'quantity' => 5],
                    ['name' => 'orzechy włoskie', 'quantity' => 10],
                    ['name' => 'sól', 'quantity' => 5],
                ],
                'image_path' => 'recipes/pumpkin-soup.jpg',
            ],
            [                'name' => '3Kremowy Kurczak z Pieczarkami',
                'description' => 'Delikatne kawałki kurczaka w kremowym sosie z pieczarkami.',
                'instruction' => '1. Na patelni rozgrzej olej i zrumień kawałki kurczaka.
                      2. Dodaj posiekane pieczarki i smaż do zmiękczenia.
                      3. Wlej śmietankę i gotuj na małym ogniu przez 10 minut.
                      4. Dopraw solą, pieprzem i posyp posiekanym koperkiem.',
                'diet' => null,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'pierś z kurczaka', 'quantity' => 300],
                    ['name' => 'olej roślinny', 'quantity' => 30],
                    ['name' => 'pieczarki', 'quantity' => 200],
                    ['name' => 'śmietanka do kawy', 'quantity' => 200],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                    ['name' => 'koperek', 'quantity' => 10],
                ],
                'image_path' => 'recipes/creamy-chicken-mushrooms.jpg',
            ],
            [                'name' => '3Sałatka z Grilowanym Łososiem',
                'description' => 'Klasyczna sałatka Cezar z dodatkiem soczystego grilowanego łososia.',
                'instruction' => '1. Griluj filet łososia przez 4 minuty z każdej strony.
                      2. Na talerzu ułóż sałatę, pokrojonego łososia, posyp parmezanem.
                      3. Polej sosem Cezar i udekoruj kawałkami grzanki.',
                'diet' => null,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'filet z łososia', 'quantity' => 150],
                    ['name' => 'ser parmezan', 'quantity' => 30],
                    ['name' => 'sałata', 'quantity' => 100],
                    ['name' => 'grzanki', 'quantity' => 50],
                ],
                'image_path' => 'recipes/caesar-salad-salmon.jpg',
            ],
            [                'name' => '3Wegetariańskie Curry z Batatem',
                'description' => 'Pikantne wegetariańskie curry z batatem, ciecierzycą i szpinakiem.',
                'instruction' => '1. W garnku podsmaż czosnek i cebulę na oleju.
                      2. Dodaj pokrojonego w kostkę batata, ciecierzycę i przyprawy curry.
                      3. Wlej mleko kokosowe i gotuj do miękkości batata.
                      4. Na końcu dodaj szpinak i gotuj jeszcze 3 minuty.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::LONG,
                'ingredients' => [
                    ['name' => 'batat', 'quantity' => 200],
                    ['name' => 'ciecierzyca', 'quantity' => 150],
                    ['name' => 'szpinak', 'quantity' => 100],
                    ['name' => 'mleko', 'quantity' => 200],
                    ['name' => 'olej roślinny', 'quantity' => 30],
                    ['name' => 'czosnek', 'quantity' => 10],
                ],
                'image_path' => 'recipes/vegetarian-curry-sweet-potato.jpg',
            ],
            [                'name' => '3Makaron Penne z Sosem Serowym',
                'description' => 'Kremowy makaron penne w bogatym sosie serowym.',
                'instruction' => '1. Ugotuj makaron penne al dente.
                      2. Na patelni rozpuść masło, dodaj śmietanę i ser, mieszając do uzyskania gładkiego sosu.
                      3. Dodaj ugotowany makaron do sosu, mieszaj i podawaj z posiekaną bazylią.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'penne', 'quantity' => 200],
                    ['name' => 'masło', 'quantity' => 30],
                    ['name' => 'śmietana kremówka', 'quantity' => 100],
                    ['name' => 'ser', 'quantity' => 50],
                    ['name' => 'bazylia', 'quantity' => 5],
                ],
                'image_path' => 'recipes/penne-cheese-sauce.jpg',
            ],
            [                'name' => '3Pieczona Kaczka z Jabłkami',
                'description' => 'Soczysta pieczona kaczka z jabłkami i ziołami.',
                'instruction' => '1. Kaczkę natrzyj solą, pieprzem i ziołami.
                      2. Włóż do środka pokrojone jabłka.
                      3. Piecz w piekarniku przez 1,5 godziny w temperaturze 180°C.
                      4. Podawaj z pieczonymi jabłkami i sosie z pieczenia.',
                'diet' => null,
                'time' => RecipeTime::LONG,
                'ingredients' => [
                    ['name' => 'kaczka', 'quantity' => 1000],
                    ['name' => 'jabłko', 'quantity' => 2],
                    ['name' => 'sól', 'quantity' => 10],
                    ['name' => 'pieprz', 'quantity' => 5],
                    ['name' => 'rozmaryn', 'quantity' => 5],
                    ['name' => 'tymianek', 'quantity' => 5],
                ],
                'image_path' => 'recipes/roasted-duck-apples.jpg',
            ],
            [                'name' => '3Omlet z Serem i Szpinakiem',
                'description' => 'Puszysty omlet z serem, świeżym szpinakiem i cebulą.',
                'instruction' => '1. Roztrzep jajka w misce, dodaj posiekany szpinak i cebulę.
                      2. Na patelni rozgrzej masło i wlej masę jajeczną.
                      3. Posyp startym serem i smaż na małym ogniu do zastygnięcia.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'jajko', 'quantity' => 2],
                    ['name' => 'ser', 'quantity' => 30],
                    ['name' => 'szpinak', 'quantity' => 50],
                    ['name' => 'cebula', 'quantity' => 1],
                    ['name' => 'masło', 'quantity' => 10],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/spinach-cheese-omelette.jpg',
            ],
            [                'name' => '3Koktajl Truskawkowy z Bananem',
                'description' => 'Orzeźwiający koktajl z truskawkami, bananem i jogurtem.',
                'instruction' => '1. W blenderze połącz truskawki, banana, jogurt i miód.
                      2. Miksuj do uzyskania gładkiego koktajlu.
                      3. Podawaj schłodzone z plasterkiem pomarańczy.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'truskawka', 'quantity' => 20],
                    ['name' => 'banan', 'quantity' => 1],
                    ['name' => 'jogurt', 'quantity' => 150],
                    ['name' => 'miód', 'quantity' => 10],
                    ['name' => 'pomarańcza', 'quantity' => 1],
                ],
                'image_path' => 'recipes/strawberry-banana-smoothie.jpg',
            ],
            [                'name' => '3Sałatka Grecka',
                'description' => 'Klasyczna sałatka grecka z pomidorem, ogórkiem, oliwkami i fetą.',
                'instruction' => '1. Pokrój pomidory, ogórki i cebulę.
                      2. Dodaj oliwki i pokruszoną fetę.
                      3. Skrop oliwą z oliwek, dopraw solą i pieprzem.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'pomidor', 'quantity' => 2],
                    ['name' => 'ogórek', 'quantity' => 1],
                    ['name' => 'cebula', 'quantity' => 1],
                    ['name' => 'oliwki', 'quantity' => 30],
                    ['name' => 'ser feta', 'quantity' => 30],
                    ['name' => 'oliwa z oliwek', 'quantity' => 15],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/greek-salad.jpg',
            ],
            [                'name' => '3Kremowa Zupa Brokułowa',
                'description' => 'Delikatna zupa kremowa z soczystym brokułem i serem parmezan.',
                'instruction' => '1. Gotuj brokuły na parze do miękkości.
                      2. Rozblenduj je z gorącym mlekiem i serem parmezan.
                      3. Dopraw solą i pieprzem, podawaj z grzankami.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'brokuł', 'quantity' => 1],
                    ['name' => 'mleko', 'quantity' => 200],
                    ['name' => 'ser parmezan', 'quantity' => 30],
                    ['name' => 'grzanki', 'quantity' => 50],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/cream-of-broccoli-soup.jpg',
            ],
            [                'name' => '3Kotlety Schabowe',
                'description' => 'Tradycyjne kotlety schabowe smażone na maśle klarowanym.',
                'instruction' => '1. Rozbij kotlety schabowe, dopraw solą i pieprzem.
                      2. Obtocz w mące, jajku i bułce tartej.
                      3. Smaż na maśle klarowanym z obu stron do zarumienienia.',
                'diet' => null,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'kotlet schabowy', 'quantity' => 2],
                    ['name' => 'masło', 'quantity' => 30],
                    ['name' => 'mąka', 'quantity' => 30],
                    ['name' => 'jajko', 'quantity' => 1],
                    ['name' => 'bułka tarta', 'quantity' => 30],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/pork-cutlets.jpg',
            ],
            [                'name' => '3Sałatka z Komosą Ryżową',
                'description' => 'Zdrowa sałatka z komosą ryżową, pieczonymi warzywami i sosem jogurtowym.',
                'instruction' => '1. Ugotuj komosę ryżową według instrukcji na opakowaniu.
                      2. Piecz warzywa (np. batata, paprykę, cukinię) z odrobiną oliwy.
                      3. Połącz komosę ryżową, warzywa.
                      4. Skrop sosem jogurtowym i podawaj.',
                'diet' => RecipeDiet::VEGAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'komosa ryżowa', 'quantity' => 100],
                    ['name' => 'batat', 'quantity' => 1],
                    ['name' => 'papryka', 'quantity' => 1],
                    ['name' => 'cukinia', 'quantity' => 1],
                    ['name' => 'oliwa z oliwek', 'quantity' => 15],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                    ['name' => 'jogurt', 'quantity' => 30],
                ],
                'image_path' => 'recipes/quinoa-veggie-salad.jpg',
            ],
            [                'name' => '3Krem z Dyni',
                'description' => 'Delikatny krem z dyni z nutą cynamonu i orzechów.',
                'instruction' => '1. Upiecz kawałki dyni w piekarniku.
                      2. Rozblenduj dynię z ciepłym mlekiem roślinnym.
                      3. Dodaj cynamon, orzechy i sól. Podawaj gorący.',
                'diet' => RecipeDiet::VEGAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'dynia', 'quantity' => 200],
                    ['name' => 'mleko owsiane', 'quantity' => 200],
                    ['name' => 'cynamon', 'quantity' => 5],
                    ['name' => 'orzechy włoskie', 'quantity' => 10],
                    ['name' => 'sól', 'quantity' => 5],
                ],
                'image_path' => 'recipes/pumpkin-soup.jpg',
            ],
            [                'name' => '3Kasza Jaglana z Warzywami',
                'description' => 'Kasza jaglana z duszonymi warzywami i sosie pomidorowym.',
                'instruction' => '1. Ugotuj kaszę jaglaną zgodnie z instrukcją.
                      2. Podsmaż cebulę i czosnek, dodaj pokrojone warzywa (np. cukinię, paprykę).
                      3. Dodaj sos pomidorowy i dusz warzywa.
                      4. Podawaj z ugotowaną kaszą.',
                'diet' => RecipeDiet::VEGAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'kasza jaglana', 'quantity' => 100],
                    ['name' => 'cebula', 'quantity' => 1],
                    ['name' => 'czosnek', 'quantity' => 2],
                    ['name' => 'cukinia', 'quantity' => 1],
                    ['name' => 'papryka', 'quantity' => 1],
                    ['name' => 'pomidor', 'quantity' => 2],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/buckwheat-vegetable-stir-fry.jpg',
            ],
            [                'name' => '3XYZ Kasza Jaglana z Warzywami',
                'description' => 'Kasza jaglana z duszonymi warzywami i sosie pomidorowym.',
                'instruction' => '1. Ugotuj kaszę jaglaną zgodnie z instrukcją.
                      2. Podsmaż cebulę i czosnek, dodaj pokrojone warzywa (np. cukinię, paprykę).
                      3. Dodaj sos pomidorowy i dusz warzywa.
                      4. Podawaj z ugotowaną kaszą.',
                'diet' => RecipeDiet::VEGAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'kasza jaglana', 'quantity' => 100],
                    ['name' => 'cebula', 'quantity' => 1],
                    ['name' => 'czosnek', 'quantity' => 2],
                    ['name' => 'cukinia', 'quantity' => 1],
                    ['name' => 'papryka', 'quantity' => 1],
                    ['name' => 'pomidor', 'quantity' => 2],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/buckwheat-vegetable-stir-fry.jpg',
            ],
            [                'name' => '3XYZ Kremowy Kurczak z Pieczarkami',
                'description' => 'Delikatne kawałki kurczaka w kremowym sosie z pieczarkami.',
                'instruction' => '1. Na patelni rozgrzej olej i zrumień kawałki kurczaka.
                      2. Dodaj posiekane pieczarki i smaż do zmiękczenia.
                      3. Wlej śmietankę i gotuj na małym ogniu przez 10 minut.
                      4. Dopraw solą, pieprzem i posyp posiekanym koperkiem.',
                'diet' => null,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'pierś z kurczaka', 'quantity' => 300],
                    ['name' => 'olej roślinny', 'quantity' => 30],
                    ['name' => 'pieczarki', 'quantity' => 200],
                    ['name' => 'śmietanka do kawy', 'quantity' => 200],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                    ['name' => 'koperek', 'quantity' => 10],
                ],
                'image_path' => 'recipes/creamy-chicken-mushrooms.jpg',
            ],
            [                'name' => '3XYZ Sałatka z Grilowanym Łososiem',
                'description' => 'Klasyczna sałatka Cezar z dodatkiem soczystego grilowanego łososia.',
                'instruction' => '1. Griluj filet łososia przez 4 minuty z każdej strony.
                      2. Na talerzu ułóż sałatę, pokrojonego łososia, posyp parmezanem.
                      3. Polej sosem Cezar i udekoruj kawałkami grzanki.',
                'diet' => null,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'filet z łososia', 'quantity' => 150],
                    ['name' => 'ser parmezan', 'quantity' => 30],
                    ['name' => 'sałata', 'quantity' => 100],
                    ['name' => 'grzanki', 'quantity' => 50],
                ],
                'image_path' => 'recipes/caesar-salad-salmon.jpg',
            ],
            [                'name' => '3XYZ Wegetariańskie Curry z Batatem',
                'description' => 'Pikantne wegetariańskie curry z batatem, ciecierzycą i szpinakiem.',
                'instruction' => '1. W garnku podsmaż czosnek i cebulę na oleju.
                      2. Dodaj pokrojonego w kostkę batata, ciecierzycę i przyprawy curry.
                      3. Wlej mleko kokosowe i gotuj do miękkości batata.
                      4. Na końcu dodaj szpinak i gotuj jeszcze 3 minuty.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::LONG,
                'ingredients' => [
                    ['name' => 'batat', 'quantity' => 200],
                    ['name' => 'ciecierzyca', 'quantity' => 150],
                    ['name' => 'szpinak', 'quantity' => 100],
                    ['name' => 'mleko', 'quantity' => 200],
                    ['name' => 'olej roślinny', 'quantity' => 30],
                    ['name' => 'czosnek', 'quantity' => 10],
                ],
                'image_path' => 'recipes/vegetarian-curry-sweet-potato.jpg',
            ],
            [                'name' => '3XYZ Makaron Penne z Sosem Serowym',
                'description' => 'Kremowy makaron penne w bogatym sosie serowym.',
                'instruction' => '1. Ugotuj makaron penne al dente.
                      2. Na patelni rozpuść masło, dodaj śmietanę i ser, mieszając do uzyskania gładkiego sosu.
                      3. Dodaj ugotowany makaron do sosu, mieszaj i podawaj z posiekaną bazylią.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'penne', 'quantity' => 200],
                    ['name' => 'masło', 'quantity' => 30],
                    ['name' => 'śmietana kremówka', 'quantity' => 100],
                    ['name' => 'ser', 'quantity' => 50],
                    ['name' => 'bazylia', 'quantity' => 5],
                ],
                'image_path' => 'recipes/penne-cheese-sauce.jpg',
            ],
            [                'name' => '3XYZ Pieczona Kaczka z Jabłkami',
                'description' => 'Soczysta pieczona kaczka z jabłkami i ziołami.',
                'instruction' => '1. Kaczkę natrzyj solą, pieprzem i ziołami.
                      2. Włóż do środka pokrojone jabłka.
                      3. Piecz w piekarniku przez 1,5 godziny w temperaturze 180°C.
                      4. Podawaj z pieczonymi jabłkami i sosie z pieczenia.',
                'diet' => null,
                'time' => RecipeTime::LONG,
                'ingredients' => [
                    ['name' => 'kaczka', 'quantity' => 1000],
                    ['name' => 'jabłko', 'quantity' => 2],
                    ['name' => 'sól', 'quantity' => 10],
                    ['name' => 'pieprz', 'quantity' => 5],
                    ['name' => 'rozmaryn', 'quantity' => 5],
                    ['name' => 'tymianek', 'quantity' => 5],
                ],
                'image_path' => 'recipes/roasted-duck-apples.jpg',
            ],
            [                'name' => '3XYZ Omlet z Serem i Szpinakiem',
                'description' => 'Puszysty omlet z serem, świeżym szpinakiem i cebulą.',
                'instruction' => '1. Roztrzep jajka w misce, dodaj posiekany szpinak i cebulę.
                      2. Na patelni rozgrzej masło i wlej masę jajeczną.
                      3. Posyp startym serem i smaż na małym ogniu do zastygnięcia.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'jajko', 'quantity' => 2],
                    ['name' => 'ser', 'quantity' => 30],
                    ['name' => 'szpinak', 'quantity' => 50],
                    ['name' => 'cebula', 'quantity' => 1],
                    ['name' => 'masło', 'quantity' => 10],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/spinach-cheese-omelette.jpg',
            ],
            [                'name' => '3XYZ Koktajl Truskawkowy z Bananem',
                'description' => 'Orzeźwiający koktajl z truskawkami, bananem i jogurtem.',
                'instruction' => '1. W blenderze połącz truskawki, banana, jogurt i miód.
                      2. Miksuj do uzyskania gładkiego koktajlu.
                      3. Podawaj schłodzone z plasterkiem pomarańczy.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'truskawka', 'quantity' => 20],
                    ['name' => 'banan', 'quantity' => 1],
                    ['name' => 'jogurt', 'quantity' => 150],
                    ['name' => 'miód', 'quantity' => 10],
                    ['name' => 'pomarańcza', 'quantity' => 1],
                ],
                'image_path' => 'recipes/strawberry-banana-smoothie.jpg',
            ],
            [                'name' => '3XYZ Sałatka Grecka',
                'description' => 'Klasyczna sałatka grecka z pomidorem, ogórkiem, oliwkami i fetą.',
                'instruction' => '1. Pokrój pomidory, ogórki i cebulę.
                      2. Dodaj oliwki i pokruszoną fetę.
                      3. Skrop oliwą z oliwek, dopraw solą i pieprzem.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'pomidor', 'quantity' => 2],
                    ['name' => 'ogórek', 'quantity' => 1],
                    ['name' => 'cebula', 'quantity' => 1],
                    ['name' => 'oliwki', 'quantity' => 30],
                    ['name' => 'ser feta', 'quantity' => 30],
                    ['name' => 'oliwa z oliwek', 'quantity' => 15],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/greek-salad.jpg',
            ],
            [                'name' => '3XYZ Kremowa Zupa Brokułowa',
                'description' => 'Delikatna zupa kremowa z soczystym brokułem i serem parmezan.',
                'instruction' => '1. Gotuj brokuły na parze do miękkości.
                      2. Rozblenduj je z gorącym mlekiem i serem parmezan.
                      3. Dopraw solą i pieprzem, podawaj z grzankami.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'brokuł', 'quantity' => 1],
                    ['name' => 'mleko', 'quantity' => 200],
                    ['name' => 'ser parmezan', 'quantity' => 30],
                    ['name' => 'grzanki', 'quantity' => 50],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/cream-of-broccoli-soup.jpg',
            ],
            [                'name' => '3XYZ Kotlety Schabowe',
                'description' => 'Tradycyjne kotlety schabowe smażone na maśle klarowanym.',
                'instruction' => '1. Rozbij kotlety schabowe, dopraw solą i pieprzem.
                      2. Obtocz w mące, jajku i bułce tartej.
                      3. Smaż na maśle klarowanym z obu stron do zarumienienia.',
                'diet' => null,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'kotlet schabowy', 'quantity' => 2],
                    ['name' => 'masło', 'quantity' => 30],
                    ['name' => 'mąka', 'quantity' => 30],
                    ['name' => 'jajko', 'quantity' => 1],
                    ['name' => 'bułka tarta', 'quantity' => 30],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/pork-cutlets.jpg',
            ],
            [                'name' => '3XYZ Sałatka z Komosą Ryżową',
                'description' => 'Zdrowa sałatka z komosą ryżową, pieczonymi warzywami i sosem jogurtowym.',
                'instruction' => '1. Ugotuj komosę ryżową według instrukcji na opakowaniu.
                      2. Piecz warzywa (np. batata, paprykę, cukinię) z odrobiną oliwy.
                      3. Połącz komosę ryżową, warzywa.
                      4. Skrop sosem jogurtowym i podawaj.',
                'diet' => RecipeDiet::VEGAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'komosa ryżowa', 'quantity' => 100],
                    ['name' => 'batat', 'quantity' => 1],
                    ['name' => 'papryka', 'quantity' => 1],
                    ['name' => 'cukinia', 'quantity' => 1],
                    ['name' => 'oliwa z oliwek', 'quantity' => 15],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                    ['name' => 'jogurt', 'quantity' => 30],
                ],
                'image_path' => 'recipes/quinoa-veggie-salad.jpg',
            ],
            [                'name' => '3XYZ Krem z Dyni',
                'description' => 'Delikatny krem z dyni z nutą cynamonu i orzechów.',
                'instruction' => '1. Upiecz kawałki dyni w piekarniku.
                      2. Rozblenduj dynię z ciepłym mlekiem roślinnym.
                      3. Dodaj cynamon, orzechy i sól. Podawaj gorący.',
                'diet' => RecipeDiet::VEGAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'dynia', 'quantity' => 200],
                    ['name' => 'mleko owsiane', 'quantity' => 200],
                    ['name' => 'cynamon', 'quantity' => 5],
                    ['name' => 'orzechy włoskie', 'quantity' => 10],
                    ['name' => 'sól', 'quantity' => 5],
                ],
                'image_path' => 'recipes/pumpkin-soup.jpg',
            ],
            [                'name' => '3ABC1 Kasza Jaglana z Warzywami',
                'description' => 'Kasza jaglana z duszonymi warzywami i sosie pomidorowym.',
                'instruction' => '1. Ugotuj kaszę jaglaną zgodnie z instrukcją.
                      2. Podsmaż cebulę i czosnek, dodaj pokrojone warzywa (np. cukinię, paprykę).
                      3. Dodaj sos pomidorowy i dusz warzywa.
                      4. Podawaj z ugotowaną kaszą.',
                'diet' => RecipeDiet::VEGAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'kasza jaglana', 'quantity' => 100],
                    ['name' => 'cebula', 'quantity' => 1],
                    ['name' => 'czosnek', 'quantity' => 2],
                    ['name' => 'cukinia', 'quantity' => 1],
                    ['name' => 'papryka', 'quantity' => 1],
                    ['name' => 'pomidor', 'quantity' => 2],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/buckwheat-vegetable-stir-fry.jpg',
            ],
            [                'name' => '3ABC1 Kremowy Kurczak z Pieczarkami',
                'description' => 'Delikatne kawałki kurczaka w kremowym sosie z pieczarkami.',
                'instruction' => '1. Na patelni rozgrzej olej i zrumień kawałki kurczaka.
                      2. Dodaj posiekane pieczarki i smaż do zmiękczenia.
                      3. Wlej śmietankę i gotuj na małym ogniu przez 10 minut.
                      4. Dopraw solą, pieprzem i posyp posiekanym koperkiem.',
                'diet' => null,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'pierś z kurczaka', 'quantity' => 300],
                    ['name' => 'olej roślinny', 'quantity' => 30],
                    ['name' => 'pieczarki', 'quantity' => 200],
                    ['name' => 'śmietanka do kawy', 'quantity' => 200],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                    ['name' => 'koperek', 'quantity' => 10],
                ],
                'image_path' => 'recipes/creamy-chicken-mushrooms.jpg',
            ],
            [                'name' => '3ABC1 Sałatka z Grilowanym Łososiem',
                'description' => 'Klasyczna sałatka Cezar z dodatkiem soczystego grilowanego łososia.',
                'instruction' => '1. Griluj filet łososia przez 4 minuty z każdej strony.
                      2. Na talerzu ułóż sałatę, pokrojonego łososia, posyp parmezanem.
                      3. Polej sosem Cezar i udekoruj kawałkami grzanki.',
                'diet' => null,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'filet z łososia', 'quantity' => 150],
                    ['name' => 'ser parmezan', 'quantity' => 30],
                    ['name' => 'sałata', 'quantity' => 100],
                    ['name' => 'grzanki', 'quantity' => 50],
                ],
                'image_path' => 'recipes/caesar-salad-salmon.jpg',
            ],
            [                'name' => '3ABC1 Wegetariańskie Curry z Batatem',
                'description' => 'Pikantne wegetariańskie curry z batatem, ciecierzycą i szpinakiem.',
                'instruction' => '1. W garnku podsmaż czosnek i cebulę na oleju.
                      2. Dodaj pokrojonego w kostkę batata, ciecierzycę i przyprawy curry.
                      3. Wlej mleko kokosowe i gotuj do miękkości batata.
                      4. Na końcu dodaj szpinak i gotuj jeszcze 3 minuty.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::LONG,
                'ingredients' => [
                    ['name' => 'batat', 'quantity' => 200],
                    ['name' => 'ciecierzyca', 'quantity' => 150],
                    ['name' => 'szpinak', 'quantity' => 100],
                    ['name' => 'mleko', 'quantity' => 200],
                    ['name' => 'olej roślinny', 'quantity' => 30],
                    ['name' => 'czosnek', 'quantity' => 10],
                ],
                'image_path' => 'recipes/vegetarian-curry-sweet-potato.jpg',
            ],
            [                'name' => '3ABC1 Makaron Penne z Sosem Serowym',
                'description' => 'Kremowy makaron penne w bogatym sosie serowym.',
                'instruction' => '1. Ugotuj makaron penne al dente.
                      2. Na patelni rozpuść masło, dodaj śmietanę i ser, mieszając do uzyskania gładkiego sosu.
                      3. Dodaj ugotowany makaron do sosu, mieszaj i podawaj z posiekaną bazylią.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'penne', 'quantity' => 200],
                    ['name' => 'masło', 'quantity' => 30],
                    ['name' => 'śmietana kremówka', 'quantity' => 100],
                    ['name' => 'ser', 'quantity' => 50],
                    ['name' => 'bazylia', 'quantity' => 5],
                ],
                'image_path' => 'recipes/penne-cheese-sauce.jpg',
            ],
            [                'name' => '3ABC1 Pieczona Kaczka z Jabłkami',
                'description' => 'Soczysta pieczona kaczka z jabłkami i ziołami.',
                'instruction' => '1. Kaczkę natrzyj solą, pieprzem i ziołami.
                      2. Włóż do środka pokrojone jabłka.
                      3. Piecz w piekarniku przez 1,5 godziny w temperaturze 180°C.
                      4. Podawaj z pieczonymi jabłkami i sosie z pieczenia.',
                'diet' => null,
                'time' => RecipeTime::LONG,
                'ingredients' => [
                    ['name' => 'kaczka', 'quantity' => 1000],
                    ['name' => 'jabłko', 'quantity' => 2],
                    ['name' => 'sól', 'quantity' => 10],
                    ['name' => 'pieprz', 'quantity' => 5],
                    ['name' => 'rozmaryn', 'quantity' => 5],
                    ['name' => 'tymianek', 'quantity' => 5],
                ],
                'image_path' => 'recipes/roasted-duck-apples.jpg',
            ],
            [                'name' => '3ABC1 Omlet z Serem i Szpinakiem',
                'description' => 'Puszysty omlet z serem, świeżym szpinakiem i cebulą.',
                'instruction' => '1. Roztrzep jajka w misce, dodaj posiekany szpinak i cebulę.
                      2. Na patelni rozgrzej masło i wlej masę jajeczną.
                      3. Posyp startym serem i smaż na małym ogniu do zastygnięcia.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'jajko', 'quantity' => 2],
                    ['name' => 'ser', 'quantity' => 30],
                    ['name' => 'szpinak', 'quantity' => 50],
                    ['name' => 'cebula', 'quantity' => 1],
                    ['name' => 'masło', 'quantity' => 10],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/spinach-cheese-omelette.jpg',
            ],
            [                'name' => '3ABC1 Koktajl Truskawkowy z Bananem',
                'description' => 'Orzeźwiający koktajl z truskawkami, bananem i jogurtem.',
                'instruction' => '1. W blenderze połącz truskawki, banana, jogurt i miód.
                      2. Miksuj do uzyskania gładkiego koktajlu.
                      3. Podawaj schłodzone z plasterkiem pomarańczy.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'truskawka', 'quantity' => 20],
                    ['name' => 'banan', 'quantity' => 1],
                    ['name' => 'jogurt', 'quantity' => 150],
                    ['name' => 'miód', 'quantity' => 10],
                    ['name' => 'pomarańcza', 'quantity' => 1],
                ],
                'image_path' => 'recipes/strawberry-banana-smoothie.jpg',
            ],
            [                'name' => '3ABC1 Sałatka Grecka',
                'description' => 'Klasyczna sałatka grecka z pomidorem, ogórkiem, oliwkami i fetą.',
                'instruction' => '1. Pokrój pomidory, ogórki i cebulę.
                      2. Dodaj oliwki i pokruszoną fetę.
                      3. Skrop oliwą z oliwek, dopraw solą i pieprzem.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'pomidor', 'quantity' => 2],
                    ['name' => 'ogórek', 'quantity' => 1],
                    ['name' => 'cebula', 'quantity' => 1],
                    ['name' => 'oliwki', 'quantity' => 30],
                    ['name' => 'ser feta', 'quantity' => 30],
                    ['name' => 'oliwa z oliwek', 'quantity' => 15],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/greek-salad.jpg',
            ],
            [                'name' => '3ABC1 Kremowa Zupa Brokułowa',
                'description' => 'Delikatna zupa kremowa z soczystym brokułem i serem parmezan.',
                'instruction' => '1. Gotuj brokuły na parze do miękkości.
                      2. Rozblenduj je z gorącym mlekiem i serem parmezan.
                      3. Dopraw solą i pieprzem, podawaj z grzankami.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'brokuł', 'quantity' => 1],
                    ['name' => 'mleko', 'quantity' => 200],
                    ['name' => 'ser parmezan', 'quantity' => 30],
                    ['name' => 'grzanki', 'quantity' => 50],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/cream-of-broccoli-soup.jpg',
            ],
            [                'name' => '3ABC1 Kotlety Schabowe',
                'description' => 'Tradycyjne kotlety schabowe smażone na maśle klarowanym.',
                'instruction' => '1. Rozbij kotlety schabowe, dopraw solą i pieprzem.
                      2. Obtocz w mące, jajku i bułce tartej.
                      3. Smaż na maśle klarowanym z obu stron do zarumienienia.',
                'diet' => null,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'kotlet schabowy', 'quantity' => 2],
                    ['name' => 'masło', 'quantity' => 30],
                    ['name' => 'mąka', 'quantity' => 30],
                    ['name' => 'jajko', 'quantity' => 1],
                    ['name' => 'bułka tarta', 'quantity' => 30],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/pork-cutlets.jpg',
            ],
            [                'name' => '3ABC1 Sałatka z Komosą Ryżową',
                'description' => 'Zdrowa sałatka z komosą ryżową, pieczonymi warzywami i sosem jogurtowym.',
                'instruction' => '1. Ugotuj komosę ryżową według instrukcji na opakowaniu.
                      2. Piecz warzywa (np. batata, paprykę, cukinię) z odrobiną oliwy.
                      3. Połącz komosę ryżową, warzywa.
                      4. Skrop sosem jogurtowym i podawaj.',
                'diet' => RecipeDiet::VEGAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'komosa ryżowa', 'quantity' => 100],
                    ['name' => 'batat', 'quantity' => 1],
                    ['name' => 'papryka', 'quantity' => 1],
                    ['name' => 'cukinia', 'quantity' => 1],
                    ['name' => 'oliwa z oliwek', 'quantity' => 15],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                    ['name' => 'jogurt', 'quantity' => 30],
                ],
                'image_path' => 'recipes/quinoa-veggie-salad.jpg',
            ],
            [                'name' => '3ABC1 Krem z Dyni',
                'description' => 'Delikatny krem z dyni z nutą cynamonu i orzechów.',
                'instruction' => '1. Upiecz kawałki dyni w piekarniku.
                      2. Rozblenduj dynię z ciepłym mlekiem roślinnym.
                      3. Dodaj cynamon, orzechy i sól. Podawaj gorący.',
                'diet' => RecipeDiet::VEGAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'dynia', 'quantity' => 200],
                    ['name' => 'mleko owsiane', 'quantity' => 200],
                    ['name' => 'cynamon', 'quantity' => 5],
                    ['name' => 'orzechy włoskie', 'quantity' => 10],
                    ['name' => 'sól', 'quantity' => 5],
                ],
                'image_path' => 'recipes/pumpkin-soup.jpg',
            ],
            [                'name' => '3ABC2 Kasza Jaglana z Warzywami',
                'description' => 'Kasza jaglana z duszonymi warzywami i sosie pomidorowym.',
                'instruction' => '1. Ugotuj kaszę jaglaną zgodnie z instrukcją.
                      2. Podsmaż cebulę i czosnek, dodaj pokrojone warzywa (np. cukinię, paprykę).
                      3. Dodaj sos pomidorowy i dusz warzywa.
                      4. Podawaj z ugotowaną kaszą.',
                'diet' => RecipeDiet::VEGAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'kasza jaglana', 'quantity' => 100],
                    ['name' => 'cebula', 'quantity' => 1],
                    ['name' => 'czosnek', 'quantity' => 2],
                    ['name' => 'cukinia', 'quantity' => 1],
                    ['name' => 'papryka', 'quantity' => 1],
                    ['name' => 'pomidor', 'quantity' => 2],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/buckwheat-vegetable-stir-fry.jpg',
            ],
            [                'name' => '3ABC2 Kremowy Kurczak z Pieczarkami',
                'description' => 'Delikatne kawałki kurczaka w kremowym sosie z pieczarkami.',
                'instruction' => '1. Na patelni rozgrzej olej i zrumień kawałki kurczaka.
                      2. Dodaj posiekane pieczarki i smaż do zmiękczenia.
                      3. Wlej śmietankę i gotuj na małym ogniu przez 10 minut.
                      4. Dopraw solą, pieprzem i posyp posiekanym koperkiem.',
                'diet' => null,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'pierś z kurczaka', 'quantity' => 300],
                    ['name' => 'olej roślinny', 'quantity' => 30],
                    ['name' => 'pieczarki', 'quantity' => 200],
                    ['name' => 'śmietanka do kawy', 'quantity' => 200],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                    ['name' => 'koperek', 'quantity' => 10],
                ],
                'image_path' => 'recipes/creamy-chicken-mushrooms.jpg',
            ],
            [                'name' => '3ABC2 Sałatka z Grilowanym Łososiem',
                'description' => 'Klasyczna sałatka Cezar z dodatkiem soczystego grilowanego łososia.',
                'instruction' => '1. Griluj filet łososia przez 4 minuty z każdej strony.
                      2. Na talerzu ułóż sałatę, pokrojonego łososia, posyp parmezanem.
                      3. Polej sosem Cezar i udekoruj kawałkami grzanki.',
                'diet' => null,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'filet z łososia', 'quantity' => 150],
                    ['name' => 'ser parmezan', 'quantity' => 30],
                    ['name' => 'sałata', 'quantity' => 100],
                    ['name' => 'grzanki', 'quantity' => 50],
                ],
                'image_path' => 'recipes/caesar-salad-salmon.jpg',
            ],
            [                'name' => '3ABC2 Wegetariańskie Curry z Batatem',
                'description' => 'Pikantne wegetariańskie curry z batatem, ciecierzycą i szpinakiem.',
                'instruction' => '1. W garnku podsmaż czosnek i cebulę na oleju.
                      2. Dodaj pokrojonego w kostkę batata, ciecierzycę i przyprawy curry.
                      3. Wlej mleko kokosowe i gotuj do miękkości batata.
                      4. Na końcu dodaj szpinak i gotuj jeszcze 3 minuty.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::LONG,
                'ingredients' => [
                    ['name' => 'batat', 'quantity' => 200],
                    ['name' => 'ciecierzyca', 'quantity' => 150],
                    ['name' => 'szpinak', 'quantity' => 100],
                    ['name' => 'mleko', 'quantity' => 200],
                    ['name' => 'olej roślinny', 'quantity' => 30],
                    ['name' => 'czosnek', 'quantity' => 10],
                ],
                'image_path' => 'recipes/vegetarian-curry-sweet-potato.jpg',
            ],
            [                'name' => '3ABC2 Makaron Penne z Sosem Serowym',
                'description' => 'Kremowy makaron penne w bogatym sosie serowym.',
                'instruction' => '1. Ugotuj makaron penne al dente.
                      2. Na patelni rozpuść masło, dodaj śmietanę i ser, mieszając do uzyskania gładkiego sosu.
                      3. Dodaj ugotowany makaron do sosu, mieszaj i podawaj z posiekaną bazylią.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'penne', 'quantity' => 200],
                    ['name' => 'masło', 'quantity' => 30],
                    ['name' => 'śmietana kremówka', 'quantity' => 100],
                    ['name' => 'ser', 'quantity' => 50],
                    ['name' => 'bazylia', 'quantity' => 5],
                ],
                'image_path' => 'recipes/penne-cheese-sauce.jpg',
            ],
            [                'name' => '3ABC2 Pieczona Kaczka z Jabłkami',
                'description' => 'Soczysta pieczona kaczka z jabłkami i ziołami.',
                'instruction' => '1. Kaczkę natrzyj solą, pieprzem i ziołami.
                      2. Włóż do środka pokrojone jabłka.
                      3. Piecz w piekarniku przez 1,5 godziny w temperaturze 180°C.
                      4. Podawaj z pieczonymi jabłkami i sosie z pieczenia.',
                'diet' => null,
                'time' => RecipeTime::LONG,
                'ingredients' => [
                    ['name' => 'kaczka', 'quantity' => 1000],
                    ['name' => 'jabłko', 'quantity' => 2],
                    ['name' => 'sól', 'quantity' => 10],
                    ['name' => 'pieprz', 'quantity' => 5],
                    ['name' => 'rozmaryn', 'quantity' => 5],
                    ['name' => 'tymianek', 'quantity' => 5],
                ],
                'image_path' => 'recipes/roasted-duck-apples.jpg',
            ],
            [                'name' => '3ABC2 Omlet z Serem i Szpinakiem',
                'description' => 'Puszysty omlet z serem, świeżym szpinakiem i cebulą.',
                'instruction' => '1. Roztrzep jajka w misce, dodaj posiekany szpinak i cebulę.
                      2. Na patelni rozgrzej masło i wlej masę jajeczną.
                      3. Posyp startym serem i smaż na małym ogniu do zastygnięcia.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'jajko', 'quantity' => 2],
                    ['name' => 'ser', 'quantity' => 30],
                    ['name' => 'szpinak', 'quantity' => 50],
                    ['name' => 'cebula', 'quantity' => 1],
                    ['name' => 'masło', 'quantity' => 10],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/spinach-cheese-omelette.jpg',
            ],
            [                'name' => '3ABC2 Koktajl Truskawkowy z Bananem',
                'description' => 'Orzeźwiający koktajl z truskawkami, bananem i jogurtem.',
                'instruction' => '1. W blenderze połącz truskawki, banana, jogurt i miód.
                      2. Miksuj do uzyskania gładkiego koktajlu.
                      3. Podawaj schłodzone z plasterkiem pomarańczy.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'truskawka', 'quantity' => 20],
                    ['name' => 'banan', 'quantity' => 1],
                    ['name' => 'jogurt', 'quantity' => 150],
                    ['name' => 'miód', 'quantity' => 10],
                    ['name' => 'pomarańcza', 'quantity' => 1],
                ],
                'image_path' => 'recipes/strawberry-banana-smoothie.jpg',
            ],
            [                'name' => '3ABC2 Sałatka Grecka',
                'description' => 'Klasyczna sałatka grecka z pomidorem, ogórkiem, oliwkami i fetą.',
                'instruction' => '1. Pokrój pomidory, ogórki i cebulę.
                      2. Dodaj oliwki i pokruszoną fetę.
                      3. Skrop oliwą z oliwek, dopraw solą i pieprzem.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'pomidor', 'quantity' => 2],
                    ['name' => 'ogórek', 'quantity' => 1],
                    ['name' => 'cebula', 'quantity' => 1],
                    ['name' => 'oliwki', 'quantity' => 30],
                    ['name' => 'ser feta', 'quantity' => 30],
                    ['name' => 'oliwa z oliwek', 'quantity' => 15],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/greek-salad.jpg',
            ],
            [                'name' => '3ABC2 Kremowa Zupa Brokułowa',
                'description' => 'Delikatna zupa kremowa z soczystym brokułem i serem parmezan.',
                'instruction' => '1. Gotuj brokuły na parze do miękkości.
                      2. Rozblenduj je z gorącym mlekiem i serem parmezan.
                      3. Dopraw solą i pieprzem, podawaj z grzankami.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'brokuł', 'quantity' => 1],
                    ['name' => 'mleko', 'quantity' => 200],
                    ['name' => 'ser parmezan', 'quantity' => 30],
                    ['name' => 'grzanki', 'quantity' => 50],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/cream-of-broccoli-soup.jpg',
            ],
            [                'name' => '3ABC2 Kotlety Schabowe',
                'description' => 'Tradycyjne kotlety schabowe smażone na maśle klarowanym.',
                'instruction' => '1. Rozbij kotlety schabowe, dopraw solą i pieprzem.
                      2. Obtocz w mące, jajku i bułce tartej.
                      3. Smaż na maśle klarowanym z obu stron do zarumienienia.',
                'diet' => null,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'kotlet schabowy', 'quantity' => 2],
                    ['name' => 'masło', 'quantity' => 30],
                    ['name' => 'mąka', 'quantity' => 30],
                    ['name' => 'jajko', 'quantity' => 1],
                    ['name' => 'bułka tarta', 'quantity' => 30],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/pork-cutlets.jpg',
            ],
            [                'name' => '3ABC2 Sałatka z Komosą Ryżową',
                'description' => 'Zdrowa sałatka z komosą ryżową, pieczonymi warzywami i sosem jogurtowym.',
                'instruction' => '1. Ugotuj komosę ryżową według instrukcji na opakowaniu.
                      2. Piecz warzywa (np. batata, paprykę, cukinię) z odrobiną oliwy.
                      3. Połącz komosę ryżową, warzywa.
                      4. Skrop sosem jogurtowym i podawaj.',
                'diet' => RecipeDiet::VEGAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'komosa ryżowa', 'quantity' => 100],
                    ['name' => 'batat', 'quantity' => 1],
                    ['name' => 'papryka', 'quantity' => 1],
                    ['name' => 'cukinia', 'quantity' => 1],
                    ['name' => 'oliwa z oliwek', 'quantity' => 15],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                    ['name' => 'jogurt', 'quantity' => 30],
                ],
                'image_path' => 'recipes/quinoa-veggie-salad.jpg',
            ],
            [                'name' => '3ABC2 Krem z Dyni',
                'description' => 'Delikatny krem z dyni z nutą cynamonu i orzechów.',
                'instruction' => '1. Upiecz kawałki dyni w piekarniku.
                      2. Rozblenduj dynię z ciepłym mlekiem roślinnym.
                      3. Dodaj cynamon, orzechy i sól. Podawaj gorący.',
                'diet' => RecipeDiet::VEGAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'dynia', 'quantity' => 200],
                    ['name' => 'mleko owsiane', 'quantity' => 200],
                    ['name' => 'cynamon', 'quantity' => 5],
                    ['name' => 'orzechy włoskie', 'quantity' => 10],
                    ['name' => 'sól', 'quantity' => 5],
                ],
                'image_path' => 'recipes/pumpkin-soup.jpg',
            ],
            [                'name' => '4Kremowy Kurczak z Pieczarkami',
                'description' => 'Delikatne kawałki kurczaka w kremowym sosie z pieczarkami.',
                'instruction' => '1. Na patelni rozgrzej olej i zrumień kawałki kurczaka.
                      2. Dodaj posiekane pieczarki i smaż do zmiękczenia.
                      3. Wlej śmietankę i gotuj na małym ogniu przez 10 minut.
                      4. Dopraw solą, pieprzem i posyp posiekanym koperkiem.',
                'diet' => null,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'pierś z kurczaka', 'quantity' => 300],
                    ['name' => 'olej roślinny', 'quantity' => 30],
                    ['name' => 'pieczarki', 'quantity' => 200],
                    ['name' => 'śmietanka do kawy', 'quantity' => 200],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                    ['name' => 'koperek', 'quantity' => 10],
                ],
                'image_path' => 'recipes/creamy-chicken-mushrooms.jpg',
            ],
            [                'name' => '4Sałatka z Grilowanym Łososiem',
                'description' => 'Klasyczna sałatka Cezar z dodatkiem soczystego grilowanego łososia.',
                'instruction' => '1. Griluj filet łososia przez 4 minuty z każdej strony.
                      2. Na talerzu ułóż sałatę, pokrojonego łososia, posyp parmezanem.
                      3. Polej sosem Cezar i udekoruj kawałkami grzanki.',
                'diet' => null,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'filet z łososia', 'quantity' => 150],
                    ['name' => 'ser parmezan', 'quantity' => 30],
                    ['name' => 'sałata', 'quantity' => 100],
                    ['name' => 'grzanki', 'quantity' => 50],
                ],
                'image_path' => 'recipes/caesar-salad-salmon.jpg',
            ],
            [                'name' => '4Wegetariańskie Curry z Batatem',
                'description' => 'Pikantne wegetariańskie curry z batatem, ciecierzycą i szpinakiem.',
                'instruction' => '1. W garnku podsmaż czosnek i cebulę na oleju.
                      2. Dodaj pokrojonego w kostkę batata, ciecierzycę i przyprawy curry.
                      3. Wlej mleko kokosowe i gotuj do miękkości batata.
                      4. Na końcu dodaj szpinak i gotuj jeszcze 3 minuty.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::LONG,
                'ingredients' => [
                    ['name' => 'batat', 'quantity' => 200],
                    ['name' => 'ciecierzyca', 'quantity' => 150],
                    ['name' => 'szpinak', 'quantity' => 100],
                    ['name' => 'mleko', 'quantity' => 200],
                    ['name' => 'olej roślinny', 'quantity' => 30],
                    ['name' => 'czosnek', 'quantity' => 10],
                ],
                'image_path' => 'recipes/vegetarian-curry-sweet-potato.jpg',
            ],
            [                'name' => '4Makaron Penne z Sosem Serowym',
                'description' => 'Kremowy makaron penne w bogatym sosie serowym.',
                'instruction' => '1. Ugotuj makaron penne al dente.
                      2. Na patelni rozpuść masło, dodaj śmietanę i ser, mieszając do uzyskania gładkiego sosu.
                      3. Dodaj ugotowany makaron do sosu, mieszaj i podawaj z posiekaną bazylią.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'penne', 'quantity' => 200],
                    ['name' => 'masło', 'quantity' => 30],
                    ['name' => 'śmietana kremówka', 'quantity' => 100],
                    ['name' => 'ser', 'quantity' => 50],
                    ['name' => 'bazylia', 'quantity' => 5],
                ],
                'image_path' => 'recipes/penne-cheese-sauce.jpg',
            ],
            [                'name' => '4Pieczona Kaczka z Jabłkami',
                'description' => 'Soczysta pieczona kaczka z jabłkami i ziołami.',
                'instruction' => '1. Kaczkę natrzyj solą, pieprzem i ziołami.
                      2. Włóż do środka pokrojone jabłka.
                      3. Piecz w piekarniku przez 1,5 godziny w temperaturze 180°C.
                      4. Podawaj z pieczonymi jabłkami i sosie z pieczenia.',
                'diet' => null,
                'time' => RecipeTime::LONG,
                'ingredients' => [
                    ['name' => 'kaczka', 'quantity' => 1000],
                    ['name' => 'jabłko', 'quantity' => 2],
                    ['name' => 'sól', 'quantity' => 10],
                    ['name' => 'pieprz', 'quantity' => 5],
                    ['name' => 'rozmaryn', 'quantity' => 5],
                    ['name' => 'tymianek', 'quantity' => 5],
                ],
                'image_path' => 'recipes/roasted-duck-apples.jpg',
            ],
            [                'name' => '4Omlet z Serem i Szpinakiem',
                'description' => 'Puszysty omlet z serem, świeżym szpinakiem i cebulą.',
                'instruction' => '1. Roztrzep jajka w misce, dodaj posiekany szpinak i cebulę.
                      2. Na patelni rozgrzej masło i wlej masę jajeczną.
                      3. Posyp startym serem i smaż na małym ogniu do zastygnięcia.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'jajko', 'quantity' => 2],
                    ['name' => 'ser', 'quantity' => 30],
                    ['name' => 'szpinak', 'quantity' => 50],
                    ['name' => 'cebula', 'quantity' => 1],
                    ['name' => 'masło', 'quantity' => 10],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/spinach-cheese-omelette.jpg',
            ],
            [                'name' => '4Koktajl Truskawkowy z Bananem',
                'description' => 'Orzeźwiający koktajl z truskawkami, bananem i jogurtem.',
                'instruction' => '1. W blenderze połącz truskawki, banana, jogurt i miód.
                      2. Miksuj do uzyskania gładkiego koktajlu.
                      3. Podawaj schłodzone z plasterkiem pomarańczy.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'truskawka', 'quantity' => 20],
                    ['name' => 'banan', 'quantity' => 1],
                    ['name' => 'jogurt', 'quantity' => 150],
                    ['name' => 'miód', 'quantity' => 10],
                    ['name' => 'pomarańcza', 'quantity' => 1],
                ],
                'image_path' => 'recipes/strawberry-banana-smoothie.jpg',
            ],
            [                'name' => '4Sałatka Grecka',
                'description' => 'Klasyczna sałatka grecka z pomidorem, ogórkiem, oliwkami i fetą.',
                'instruction' => '1. Pokrój pomidory, ogórki i cebulę.
                      2. Dodaj oliwki i pokruszoną fetę.
                      3. Skrop oliwą z oliwek, dopraw solą i pieprzem.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'pomidor', 'quantity' => 2],
                    ['name' => 'ogórek', 'quantity' => 1],
                    ['name' => 'cebula', 'quantity' => 1],
                    ['name' => 'oliwki', 'quantity' => 30],
                    ['name' => 'ser feta', 'quantity' => 30],
                    ['name' => 'oliwa z oliwek', 'quantity' => 15],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/greek-salad.jpg',
            ],
            [                'name' => '4Kremowa Zupa Brokułowa',
                'description' => 'Delikatna zupa kremowa z soczystym brokułem i serem parmezan.',
                'instruction' => '1. Gotuj brokuły na parze do miękkości.
                      2. Rozblenduj je z gorącym mlekiem i serem parmezan.
                      3. Dopraw solą i pieprzem, podawaj z grzankami.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'brokuł', 'quantity' => 1],
                    ['name' => 'mleko', 'quantity' => 200],
                    ['name' => 'ser parmezan', 'quantity' => 30],
                    ['name' => 'grzanki', 'quantity' => 50],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/cream-of-broccoli-soup.jpg',
            ],
            [                'name' => '4Kotlety Schabowe',
                'description' => 'Tradycyjne kotlety schabowe smażone na maśle klarowanym.',
                'instruction' => '1. Rozbij kotlety schabowe, dopraw solą i pieprzem.
                      2. Obtocz w mące, jajku i bułce tartej.
                      3. Smaż na maśle klarowanym z obu stron do zarumienienia.',
                'diet' => null,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'kotlet schabowy', 'quantity' => 2],
                    ['name' => 'masło', 'quantity' => 30],
                    ['name' => 'mąka', 'quantity' => 30],
                    ['name' => 'jajko', 'quantity' => 1],
                    ['name' => 'bułka tarta', 'quantity' => 30],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/pork-cutlets.jpg',
            ],
            [                'name' => '4Sałatka z Komosą Ryżową',
                'description' => 'Zdrowa sałatka z komosą ryżową, pieczonymi warzywami i sosem jogurtowym.',
                'instruction' => '1. Ugotuj komosę ryżową według instrukcji na opakowaniu.
                      2. Piecz warzywa (np. batata, paprykę, cukinię) z odrobiną oliwy.
                      3. Połącz komosę ryżową, warzywa.
                      4. Skrop sosem jogurtowym i podawaj.',
                'diet' => RecipeDiet::VEGAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'komosa ryżowa', 'quantity' => 100],
                    ['name' => 'batat', 'quantity' => 1],
                    ['name' => 'papryka', 'quantity' => 1],
                    ['name' => 'cukinia', 'quantity' => 1],
                    ['name' => 'oliwa z oliwek', 'quantity' => 15],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                    ['name' => 'jogurt', 'quantity' => 30],
                ],
                'image_path' => 'recipes/quinoa-veggie-salad.jpg',
            ],
            [                'name' => '4Krem z Dyni',
                'description' => 'Delikatny krem z dyni z nutą cynamonu i orzechów.',
                'instruction' => '1. Upiecz kawałki dyni w piekarniku.
                      2. Rozblenduj dynię z ciepłym mlekiem roślinnym.
                      3. Dodaj cynamon, orzechy i sól. Podawaj gorący.',
                'diet' => RecipeDiet::VEGAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'dynia', 'quantity' => 200],
                    ['name' => 'mleko owsiane', 'quantity' => 200],
                    ['name' => 'cynamon', 'quantity' => 5],
                    ['name' => 'orzechy włoskie', 'quantity' => 10],
                    ['name' => 'sól', 'quantity' => 5],
                ],
                'image_path' => 'recipes/pumpkin-soup.jpg',
            ],
            [                'name' => '4Kasza Jaglana z Warzywami',
                'description' => 'Kasza jaglana z duszonymi warzywami i sosie pomidorowym.',
                'instruction' => '1. Ugotuj kaszę jaglaną zgodnie z instrukcją.
                      2. Podsmaż cebulę i czosnek, dodaj pokrojone warzywa (np. cukinię, paprykę).
                      3. Dodaj sos pomidorowy i dusz warzywa.
                      4. Podawaj z ugotowaną kaszą.',
                'diet' => RecipeDiet::VEGAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'kasza jaglana', 'quantity' => 100],
                    ['name' => 'cebula', 'quantity' => 1],
                    ['name' => 'czosnek', 'quantity' => 2],
                    ['name' => 'cukinia', 'quantity' => 1],
                    ['name' => 'papryka', 'quantity' => 1],
                    ['name' => 'pomidor', 'quantity' => 2],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/buckwheat-vegetable-stir-fry.jpg',
            ],
            [                'name' => '4XYZ Kasza Jaglana z Warzywami',
                'description' => 'Kasza jaglana z duszonymi warzywami i sosie pomidorowym.',
                'instruction' => '1. Ugotuj kaszę jaglaną zgodnie z instrukcją.
                      2. Podsmaż cebulę i czosnek, dodaj pokrojone warzywa (np. cukinię, paprykę).
                      3. Dodaj sos pomidorowy i dusz warzywa.
                      4. Podawaj z ugotowaną kaszą.',
                'diet' => RecipeDiet::VEGAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'kasza jaglana', 'quantity' => 100],
                    ['name' => 'cebula', 'quantity' => 1],
                    ['name' => 'czosnek', 'quantity' => 2],
                    ['name' => 'cukinia', 'quantity' => 1],
                    ['name' => 'papryka', 'quantity' => 1],
                    ['name' => 'pomidor', 'quantity' => 2],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/buckwheat-vegetable-stir-fry.jpg',
            ],
            [                'name' => '4XYZ Kremowy Kurczak z Pieczarkami',
                'description' => 'Delikatne kawałki kurczaka w kremowym sosie z pieczarkami.',
                'instruction' => '1. Na patelni rozgrzej olej i zrumień kawałki kurczaka.
                      2. Dodaj posiekane pieczarki i smaż do zmiękczenia.
                      3. Wlej śmietankę i gotuj na małym ogniu przez 10 minut.
                      4. Dopraw solą, pieprzem i posyp posiekanym koperkiem.',
                'diet' => null,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'pierś z kurczaka', 'quantity' => 300],
                    ['name' => 'olej roślinny', 'quantity' => 30],
                    ['name' => 'pieczarki', 'quantity' => 200],
                    ['name' => 'śmietanka do kawy', 'quantity' => 200],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                    ['name' => 'koperek', 'quantity' => 10],
                ],
                'image_path' => 'recipes/creamy-chicken-mushrooms.jpg',
            ],
            [                'name' => '4XYZ Sałatka z Grilowanym Łososiem',
                'description' => 'Klasyczna sałatka Cezar z dodatkiem soczystego grilowanego łososia.',
                'instruction' => '1. Griluj filet łososia przez 4 minuty z każdej strony.
                      2. Na talerzu ułóż sałatę, pokrojonego łososia, posyp parmezanem.
                      3. Polej sosem Cezar i udekoruj kawałkami grzanki.',
                'diet' => null,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'filet z łososia', 'quantity' => 150],
                    ['name' => 'ser parmezan', 'quantity' => 30],
                    ['name' => 'sałata', 'quantity' => 100],
                    ['name' => 'grzanki', 'quantity' => 50],
                ],
                'image_path' => 'recipes/caesar-salad-salmon.jpg',
            ],
            [                'name' => '4XYZ Wegetariańskie Curry z Batatem',
                'description' => 'Pikantne wegetariańskie curry z batatem, ciecierzycą i szpinakiem.',
                'instruction' => '1. W garnku podsmaż czosnek i cebulę na oleju.
                      2. Dodaj pokrojonego w kostkę batata, ciecierzycę i przyprawy curry.
                      3. Wlej mleko kokosowe i gotuj do miękkości batata.
                      4. Na końcu dodaj szpinak i gotuj jeszcze 3 minuty.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::LONG,
                'ingredients' => [
                    ['name' => 'batat', 'quantity' => 200],
                    ['name' => 'ciecierzyca', 'quantity' => 150],
                    ['name' => 'szpinak', 'quantity' => 100],
                    ['name' => 'mleko', 'quantity' => 200],
                    ['name' => 'olej roślinny', 'quantity' => 30],
                    ['name' => 'czosnek', 'quantity' => 10],
                ],
                'image_path' => 'recipes/vegetarian-curry-sweet-potato.jpg',
            ],
            [                'name' => '4XYZ Makaron Penne z Sosem Serowym',
                'description' => 'Kremowy makaron penne w bogatym sosie serowym.',
                'instruction' => '1. Ugotuj makaron penne al dente.
                      2. Na patelni rozpuść masło, dodaj śmietanę i ser, mieszając do uzyskania gładkiego sosu.
                      3. Dodaj ugotowany makaron do sosu, mieszaj i podawaj z posiekaną bazylią.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'penne', 'quantity' => 200],
                    ['name' => 'masło', 'quantity' => 30],
                    ['name' => 'śmietana kremówka', 'quantity' => 100],
                    ['name' => 'ser', 'quantity' => 50],
                    ['name' => 'bazylia', 'quantity' => 5],
                ],
                'image_path' => 'recipes/penne-cheese-sauce.jpg',
            ],
            [                'name' => '4XYZ Pieczona Kaczka z Jabłkami',
                'description' => 'Soczysta pieczona kaczka z jabłkami i ziołami.',
                'instruction' => '1. Kaczkę natrzyj solą, pieprzem i ziołami.
                      2. Włóż do środka pokrojone jabłka.
                      3. Piecz w piekarniku przez 1,5 godziny w temperaturze 180°C.
                      4. Podawaj z pieczonymi jabłkami i sosie z pieczenia.',
                'diet' => null,
                'time' => RecipeTime::LONG,
                'ingredients' => [
                    ['name' => 'kaczka', 'quantity' => 1000],
                    ['name' => 'jabłko', 'quantity' => 2],
                    ['name' => 'sól', 'quantity' => 10],
                    ['name' => 'pieprz', 'quantity' => 5],
                    ['name' => 'rozmaryn', 'quantity' => 5],
                    ['name' => 'tymianek', 'quantity' => 5],
                ],
                'image_path' => 'recipes/roasted-duck-apples.jpg',
            ],
            [                'name' => '4XYZ Omlet z Serem i Szpinakiem',
                'description' => 'Puszysty omlet z serem, świeżym szpinakiem i cebulą.',
                'instruction' => '1. Roztrzep jajka w misce, dodaj posiekany szpinak i cebulę.
                      2. Na patelni rozgrzej masło i wlej masę jajeczną.
                      3. Posyp startym serem i smaż na małym ogniu do zastygnięcia.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'jajko', 'quantity' => 2],
                    ['name' => 'ser', 'quantity' => 30],
                    ['name' => 'szpinak', 'quantity' => 50],
                    ['name' => 'cebula', 'quantity' => 1],
                    ['name' => 'masło', 'quantity' => 10],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/spinach-cheese-omelette.jpg',
            ],
            [                'name' => '4XYZ Koktajl Truskawkowy z Bananem',
                'description' => 'Orzeźwiający koktajl z truskawkami, bananem i jogurtem.',
                'instruction' => '1. W blenderze połącz truskawki, banana, jogurt i miód.
                      2. Miksuj do uzyskania gładkiego koktajlu.
                      3. Podawaj schłodzone z plasterkiem pomarańczy.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'truskawka', 'quantity' => 20],
                    ['name' => 'banan', 'quantity' => 1],
                    ['name' => 'jogurt', 'quantity' => 150],
                    ['name' => 'miód', 'quantity' => 10],
                    ['name' => 'pomarańcza', 'quantity' => 1],
                ],
                'image_path' => 'recipes/strawberry-banana-smoothie.jpg',
            ],
            [                'name' => '4XYZ Sałatka Grecka',
                'description' => 'Klasyczna sałatka grecka z pomidorem, ogórkiem, oliwkami i fetą.',
                'instruction' => '1. Pokrój pomidory, ogórki i cebulę.
                      2. Dodaj oliwki i pokruszoną fetę.
                      3. Skrop oliwą z oliwek, dopraw solą i pieprzem.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'pomidor', 'quantity' => 2],
                    ['name' => 'ogórek', 'quantity' => 1],
                    ['name' => 'cebula', 'quantity' => 1],
                    ['name' => 'oliwki', 'quantity' => 30],
                    ['name' => 'ser feta', 'quantity' => 30],
                    ['name' => 'oliwa z oliwek', 'quantity' => 15],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/greek-salad.jpg',
            ],
            [                'name' => '4XYZ Kremowa Zupa Brokułowa',
                'description' => 'Delikatna zupa kremowa z soczystym brokułem i serem parmezan.',
                'instruction' => '1. Gotuj brokuły na parze do miękkości.
                      2. Rozblenduj je z gorącym mlekiem i serem parmezan.
                      3. Dopraw solą i pieprzem, podawaj z grzankami.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'brokuł', 'quantity' => 1],
                    ['name' => 'mleko', 'quantity' => 200],
                    ['name' => 'ser parmezan', 'quantity' => 30],
                    ['name' => 'grzanki', 'quantity' => 50],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/cream-of-broccoli-soup.jpg',
            ],
            [                'name' => '4XYZ Kotlety Schabowe',
                'description' => 'Tradycyjne kotlety schabowe smażone na maśle klarowanym.',
                'instruction' => '1. Rozbij kotlety schabowe, dopraw solą i pieprzem.
                      2. Obtocz w mące, jajku i bułce tartej.
                      3. Smaż na maśle klarowanym z obu stron do zarumienienia.',
                'diet' => null,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'kotlet schabowy', 'quantity' => 2],
                    ['name' => 'masło', 'quantity' => 30],
                    ['name' => 'mąka', 'quantity' => 30],
                    ['name' => 'jajko', 'quantity' => 1],
                    ['name' => 'bułka tarta', 'quantity' => 30],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/pork-cutlets.jpg',
            ],
            [                'name' => '4XYZ Sałatka z Komosą Ryżową',
                'description' => 'Zdrowa sałatka z komosą ryżową, pieczonymi warzywami i sosem jogurtowym.',
                'instruction' => '1. Ugotuj komosę ryżową według instrukcji na opakowaniu.
                      2. Piecz warzywa (np. batata, paprykę, cukinię) z odrobiną oliwy.
                      3. Połącz komosę ryżową, warzywa.
                      4. Skrop sosem jogurtowym i podawaj.',
                'diet' => RecipeDiet::VEGAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'komosa ryżowa', 'quantity' => 100],
                    ['name' => 'batat', 'quantity' => 1],
                    ['name' => 'papryka', 'quantity' => 1],
                    ['name' => 'cukinia', 'quantity' => 1],
                    ['name' => 'oliwa z oliwek', 'quantity' => 15],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                    ['name' => 'jogurt', 'quantity' => 30],
                ],
                'image_path' => 'recipes/quinoa-veggie-salad.jpg',
            ],
            [                'name' => '4XYZ Krem z Dyni',
                'description' => 'Delikatny krem z dyni z nutą cynamonu i orzechów.',
                'instruction' => '1. Upiecz kawałki dyni w piekarniku.
                      2. Rozblenduj dynię z ciepłym mlekiem roślinnym.
                      3. Dodaj cynamon, orzechy i sól. Podawaj gorący.',
                'diet' => RecipeDiet::VEGAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'dynia', 'quantity' => 200],
                    ['name' => 'mleko owsiane', 'quantity' => 200],
                    ['name' => 'cynamon', 'quantity' => 5],
                    ['name' => 'orzechy włoskie', 'quantity' => 10],
                    ['name' => 'sól', 'quantity' => 5],
                ],
                'image_path' => 'recipes/pumpkin-soup.jpg',
            ],
            [                'name' => '4ABC1 Kasza Jaglana z Warzywami',
                'description' => 'Kasza jaglana z duszonymi warzywami i sosie pomidorowym.',
                'instruction' => '1. Ugotuj kaszę jaglaną zgodnie z instrukcją.
                      2. Podsmaż cebulę i czosnek, dodaj pokrojone warzywa (np. cukinię, paprykę).
                      3. Dodaj sos pomidorowy i dusz warzywa.
                      4. Podawaj z ugotowaną kaszą.',
                'diet' => RecipeDiet::VEGAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'kasza jaglana', 'quantity' => 100],
                    ['name' => 'cebula', 'quantity' => 1],
                    ['name' => 'czosnek', 'quantity' => 2],
                    ['name' => 'cukinia', 'quantity' => 1],
                    ['name' => 'papryka', 'quantity' => 1],
                    ['name' => 'pomidor', 'quantity' => 2],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/buckwheat-vegetable-stir-fry.jpg',
            ],
            [                'name' => '4ABC1 Kremowy Kurczak z Pieczarkami',
                'description' => 'Delikatne kawałki kurczaka w kremowym sosie z pieczarkami.',
                'instruction' => '1. Na patelni rozgrzej olej i zrumień kawałki kurczaka.
                      2. Dodaj posiekane pieczarki i smaż do zmiękczenia.
                      3. Wlej śmietankę i gotuj na małym ogniu przez 10 minut.
                      4. Dopraw solą, pieprzem i posyp posiekanym koperkiem.',
                'diet' => null,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'pierś z kurczaka', 'quantity' => 300],
                    ['name' => 'olej roślinny', 'quantity' => 30],
                    ['name' => 'pieczarki', 'quantity' => 200],
                    ['name' => 'śmietanka do kawy', 'quantity' => 200],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                    ['name' => 'koperek', 'quantity' => 10],
                ],
                'image_path' => 'recipes/creamy-chicken-mushrooms.jpg',
            ],
            [                'name' => '4ABC1 Sałatka z Grilowanym Łososiem',
                'description' => 'Klasyczna sałatka Cezar z dodatkiem soczystego grilowanego łososia.',
                'instruction' => '1. Griluj filet łososia przez 4 minuty z każdej strony.
                      2. Na talerzu ułóż sałatę, pokrojonego łososia, posyp parmezanem.
                      3. Polej sosem Cezar i udekoruj kawałkami grzanki.',
                'diet' => null,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'filet z łososia', 'quantity' => 150],
                    ['name' => 'ser parmezan', 'quantity' => 30],
                    ['name' => 'sałata', 'quantity' => 100],
                    ['name' => 'grzanki', 'quantity' => 50],
                ],
                'image_path' => 'recipes/caesar-salad-salmon.jpg',
            ],
            [                'name' => '4ABC1 Wegetariańskie Curry z Batatem',
                'description' => 'Pikantne wegetariańskie curry z batatem, ciecierzycą i szpinakiem.',
                'instruction' => '1. W garnku podsmaż czosnek i cebulę na oleju.
                      2. Dodaj pokrojonego w kostkę batata, ciecierzycę i przyprawy curry.
                      3. Wlej mleko kokosowe i gotuj do miękkości batata.
                      4. Na końcu dodaj szpinak i gotuj jeszcze 3 minuty.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::LONG,
                'ingredients' => [
                    ['name' => 'batat', 'quantity' => 200],
                    ['name' => 'ciecierzyca', 'quantity' => 150],
                    ['name' => 'szpinak', 'quantity' => 100],
                    ['name' => 'mleko', 'quantity' => 200],
                    ['name' => 'olej roślinny', 'quantity' => 30],
                    ['name' => 'czosnek', 'quantity' => 10],
                ],
                'image_path' => 'recipes/vegetarian-curry-sweet-potato.jpg',
            ],
            [                'name' => '4ABC1 Makaron Penne z Sosem Serowym',
                'description' => 'Kremowy makaron penne w bogatym sosie serowym.',
                'instruction' => '1. Ugotuj makaron penne al dente.
                      2. Na patelni rozpuść masło, dodaj śmietanę i ser, mieszając do uzyskania gładkiego sosu.
                      3. Dodaj ugotowany makaron do sosu, mieszaj i podawaj z posiekaną bazylią.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'penne', 'quantity' => 200],
                    ['name' => 'masło', 'quantity' => 30],
                    ['name' => 'śmietana kremówka', 'quantity' => 100],
                    ['name' => 'ser', 'quantity' => 50],
                    ['name' => 'bazylia', 'quantity' => 5],
                ],
                'image_path' => 'recipes/penne-cheese-sauce.jpg',
            ],
            [                'name' => '4ABC1 Pieczona Kaczka z Jabłkami',
                'description' => 'Soczysta pieczona kaczka z jabłkami i ziołami.',
                'instruction' => '1. Kaczkę natrzyj solą, pieprzem i ziołami.
                      2. Włóż do środka pokrojone jabłka.
                      3. Piecz w piekarniku przez 1,5 godziny w temperaturze 180°C.
                      4. Podawaj z pieczonymi jabłkami i sosie z pieczenia.',
                'diet' => null,
                'time' => RecipeTime::LONG,
                'ingredients' => [
                    ['name' => 'kaczka', 'quantity' => 1000],
                    ['name' => 'jabłko', 'quantity' => 2],
                    ['name' => 'sól', 'quantity' => 10],
                    ['name' => 'pieprz', 'quantity' => 5],
                    ['name' => 'rozmaryn', 'quantity' => 5],
                    ['name' => 'tymianek', 'quantity' => 5],
                ],
                'image_path' => 'recipes/roasted-duck-apples.jpg',
            ],
            [                'name' => '4ABC1 Omlet z Serem i Szpinakiem',
                'description' => 'Puszysty omlet z serem, świeżym szpinakiem i cebulą.',
                'instruction' => '1. Roztrzep jajka w misce, dodaj posiekany szpinak i cebulę.
                      2. Na patelni rozgrzej masło i wlej masę jajeczną.
                      3. Posyp startym serem i smaż na małym ogniu do zastygnięcia.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'jajko', 'quantity' => 2],
                    ['name' => 'ser', 'quantity' => 30],
                    ['name' => 'szpinak', 'quantity' => 50],
                    ['name' => 'cebula', 'quantity' => 1],
                    ['name' => 'masło', 'quantity' => 10],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/spinach-cheese-omelette.jpg',
            ],
            [                'name' => '4ABC1 Koktajl Truskawkowy z Bananem',
                'description' => 'Orzeźwiający koktajl z truskawkami, bananem i jogurtem.',
                'instruction' => '1. W blenderze połącz truskawki, banana, jogurt i miód.
                      2. Miksuj do uzyskania gładkiego koktajlu.
                      3. Podawaj schłodzone z plasterkiem pomarańczy.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'truskawka', 'quantity' => 20],
                    ['name' => 'banan', 'quantity' => 1],
                    ['name' => 'jogurt', 'quantity' => 150],
                    ['name' => 'miód', 'quantity' => 10],
                    ['name' => 'pomarańcza', 'quantity' => 1],
                ],
                'image_path' => 'recipes/strawberry-banana-smoothie.jpg',
            ],
            [                'name' => '4ABC1 Sałatka Grecka',
                'description' => 'Klasyczna sałatka grecka z pomidorem, ogórkiem, oliwkami i fetą.',
                'instruction' => '1. Pokrój pomidory, ogórki i cebulę.
                      2. Dodaj oliwki i pokruszoną fetę.
                      3. Skrop oliwą z oliwek, dopraw solą i pieprzem.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'pomidor', 'quantity' => 2],
                    ['name' => 'ogórek', 'quantity' => 1],
                    ['name' => 'cebula', 'quantity' => 1],
                    ['name' => 'oliwki', 'quantity' => 30],
                    ['name' => 'ser feta', 'quantity' => 30],
                    ['name' => 'oliwa z oliwek', 'quantity' => 15],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/greek-salad.jpg',
            ],
            [                'name' => '4ABC1 Kremowa Zupa Brokułowa',
                'description' => 'Delikatna zupa kremowa z soczystym brokułem i serem parmezan.',
                'instruction' => '1. Gotuj brokuły na parze do miękkości.
                      2. Rozblenduj je z gorącym mlekiem i serem parmezan.
                      3. Dopraw solą i pieprzem, podawaj z grzankami.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'brokuł', 'quantity' => 1],
                    ['name' => 'mleko', 'quantity' => 200],
                    ['name' => 'ser parmezan', 'quantity' => 30],
                    ['name' => 'grzanki', 'quantity' => 50],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/cream-of-broccoli-soup.jpg',
            ],
            [                'name' => '4ABC1 Kotlety Schabowe',
                'description' => 'Tradycyjne kotlety schabowe smażone na maśle klarowanym.',
                'instruction' => '1. Rozbij kotlety schabowe, dopraw solą i pieprzem.
                      2. Obtocz w mące, jajku i bułce tartej.
                      3. Smaż na maśle klarowanym z obu stron do zarumienienia.',
                'diet' => null,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'kotlet schabowy', 'quantity' => 2],
                    ['name' => 'masło', 'quantity' => 30],
                    ['name' => 'mąka', 'quantity' => 30],
                    ['name' => 'jajko', 'quantity' => 1],
                    ['name' => 'bułka tarta', 'quantity' => 30],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/pork-cutlets.jpg',
            ],
            [                'name' => '4ABC1 Sałatka z Komosą Ryżową',
                'description' => 'Zdrowa sałatka z komosą ryżową, pieczonymi warzywami i sosem jogurtowym.',
                'instruction' => '1. Ugotuj komosę ryżową według instrukcji na opakowaniu.
                      2. Piecz warzywa (np. batata, paprykę, cukinię) z odrobiną oliwy.
                      3. Połącz komosę ryżową, warzywa.
                      4. Skrop sosem jogurtowym i podawaj.',
                'diet' => RecipeDiet::VEGAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'komosa ryżowa', 'quantity' => 100],
                    ['name' => 'batat', 'quantity' => 1],
                    ['name' => 'papryka', 'quantity' => 1],
                    ['name' => 'cukinia', 'quantity' => 1],
                    ['name' => 'oliwa z oliwek', 'quantity' => 15],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                    ['name' => 'jogurt', 'quantity' => 30],
                ],
                'image_path' => 'recipes/quinoa-veggie-salad.jpg',
            ],
            [                'name' => '4ABC1 Krem z Dyni',
                'description' => 'Delikatny krem z dyni z nutą cynamonu i orzechów.',
                'instruction' => '1. Upiecz kawałki dyni w piekarniku.
                      2. Rozblenduj dynię z ciepłym mlekiem roślinnym.
                      3. Dodaj cynamon, orzechy i sól. Podawaj gorący.',
                'diet' => RecipeDiet::VEGAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'dynia', 'quantity' => 200],
                    ['name' => 'mleko owsiane', 'quantity' => 200],
                    ['name' => 'cynamon', 'quantity' => 5],
                    ['name' => 'orzechy włoskie', 'quantity' => 10],
                    ['name' => 'sól', 'quantity' => 5],
                ],
                'image_path' => 'recipes/pumpkin-soup.jpg',
            ],
            [                'name' => '4ABC2 Kasza Jaglana z Warzywami',
                'description' => 'Kasza jaglana z duszonymi warzywami i sosie pomidorowym.',
                'instruction' => '1. Ugotuj kaszę jaglaną zgodnie z instrukcją.
                      2. Podsmaż cebulę i czosnek, dodaj pokrojone warzywa (np. cukinię, paprykę).
                      3. Dodaj sos pomidorowy i dusz warzywa.
                      4. Podawaj z ugotowaną kaszą.',
                'diet' => RecipeDiet::VEGAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'kasza jaglana', 'quantity' => 100],
                    ['name' => 'cebula', 'quantity' => 1],
                    ['name' => 'czosnek', 'quantity' => 2],
                    ['name' => 'cukinia', 'quantity' => 1],
                    ['name' => 'papryka', 'quantity' => 1],
                    ['name' => 'pomidor', 'quantity' => 2],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/buckwheat-vegetable-stir-fry.jpg',
            ],
            [                'name' => '4ABC2 Kremowy Kurczak z Pieczarkami',
                'description' => 'Delikatne kawałki kurczaka w kremowym sosie z pieczarkami.',
                'instruction' => '1. Na patelni rozgrzej olej i zrumień kawałki kurczaka.
                      2. Dodaj posiekane pieczarki i smaż do zmiękczenia.
                      3. Wlej śmietankę i gotuj na małym ogniu przez 10 minut.
                      4. Dopraw solą, pieprzem i posyp posiekanym koperkiem.',
                'diet' => null,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'pierś z kurczaka', 'quantity' => 300],
                    ['name' => 'olej roślinny', 'quantity' => 30],
                    ['name' => 'pieczarki', 'quantity' => 200],
                    ['name' => 'śmietanka do kawy', 'quantity' => 200],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                    ['name' => 'koperek', 'quantity' => 10],
                ],
                'image_path' => 'recipes/creamy-chicken-mushrooms.jpg',
            ],
            [                'name' => '4ABC2 Sałatka z Grilowanym Łososiem',
                'description' => 'Klasyczna sałatka Cezar z dodatkiem soczystego grilowanego łososia.',
                'instruction' => '1. Griluj filet łososia przez 4 minuty z każdej strony.
                      2. Na talerzu ułóż sałatę, pokrojonego łososia, posyp parmezanem.
                      3. Polej sosem Cezar i udekoruj kawałkami grzanki.',
                'diet' => null,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'filet z łososia', 'quantity' => 150],
                    ['name' => 'ser parmezan', 'quantity' => 30],
                    ['name' => 'sałata', 'quantity' => 100],
                    ['name' => 'grzanki', 'quantity' => 50],
                ],
                'image_path' => 'recipes/caesar-salad-salmon.jpg',
            ],
            [                'name' => '4ABC2 Wegetariańskie Curry z Batatem',
                'description' => 'Pikantne wegetariańskie curry z batatem, ciecierzycą i szpinakiem.',
                'instruction' => '1. W garnku podsmaż czosnek i cebulę na oleju.
                      2. Dodaj pokrojonego w kostkę batata, ciecierzycę i przyprawy curry.
                      3. Wlej mleko kokosowe i gotuj do miękkości batata.
                      4. Na końcu dodaj szpinak i gotuj jeszcze 3 minuty.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::LONG,
                'ingredients' => [
                    ['name' => 'batat', 'quantity' => 200],
                    ['name' => 'ciecierzyca', 'quantity' => 150],
                    ['name' => 'szpinak', 'quantity' => 100],
                    ['name' => 'mleko', 'quantity' => 200],
                    ['name' => 'olej roślinny', 'quantity' => 30],
                    ['name' => 'czosnek', 'quantity' => 10],
                ],
                'image_path' => 'recipes/vegetarian-curry-sweet-potato.jpg',
            ],
            [                'name' => '4ABC2 Makaron Penne z Sosem Serowym',
                'description' => 'Kremowy makaron penne w bogatym sosie serowym.',
                'instruction' => '1. Ugotuj makaron penne al dente.
                      2. Na patelni rozpuść masło, dodaj śmietanę i ser, mieszając do uzyskania gładkiego sosu.
                      3. Dodaj ugotowany makaron do sosu, mieszaj i podawaj z posiekaną bazylią.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'penne', 'quantity' => 200],
                    ['name' => 'masło', 'quantity' => 30],
                    ['name' => 'śmietana kremówka', 'quantity' => 100],
                    ['name' => 'ser', 'quantity' => 50],
                    ['name' => 'bazylia', 'quantity' => 5],
                ],
                'image_path' => 'recipes/penne-cheese-sauce.jpg',
            ],
            [                'name' => '4ABC2 Pieczona Kaczka z Jabłkami',
                'description' => 'Soczysta pieczona kaczka z jabłkami i ziołami.',
                'instruction' => '1. Kaczkę natrzyj solą, pieprzem i ziołami.
                      2. Włóż do środka pokrojone jabłka.
                      3. Piecz w piekarniku przez 1,5 godziny w temperaturze 180°C.
                      4. Podawaj z pieczonymi jabłkami i sosie z pieczenia.',
                'diet' => null,
                'time' => RecipeTime::LONG,
                'ingredients' => [
                    ['name' => 'kaczka', 'quantity' => 1000],
                    ['name' => 'jabłko', 'quantity' => 2],
                    ['name' => 'sól', 'quantity' => 10],
                    ['name' => 'pieprz', 'quantity' => 5],
                    ['name' => 'rozmaryn', 'quantity' => 5],
                    ['name' => 'tymianek', 'quantity' => 5],
                ],
                'image_path' => 'recipes/roasted-duck-apples.jpg',
            ],
            [                'name' => '4ABC2 Omlet z Serem i Szpinakiem',
                'description' => 'Puszysty omlet z serem, świeżym szpinakiem i cebulą.',
                'instruction' => '1. Roztrzep jajka w misce, dodaj posiekany szpinak i cebulę.
                      2. Na patelni rozgrzej masło i wlej masę jajeczną.
                      3. Posyp startym serem i smaż na małym ogniu do zastygnięcia.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'jajko', 'quantity' => 2],
                    ['name' => 'ser', 'quantity' => 30],
                    ['name' => 'szpinak', 'quantity' => 50],
                    ['name' => 'cebula', 'quantity' => 1],
                    ['name' => 'masło', 'quantity' => 10],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/spinach-cheese-omelette.jpg',
            ],
            [                'name' => '4ABC2 Koktajl Truskawkowy z Bananem',
                'description' => 'Orzeźwiający koktajl z truskawkami, bananem i jogurtem.',
                'instruction' => '1. W blenderze połącz truskawki, banana, jogurt i miód.
                      2. Miksuj do uzyskania gładkiego koktajlu.
                      3. Podawaj schłodzone z plasterkiem pomarańczy.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'truskawka', 'quantity' => 20],
                    ['name' => 'banan', 'quantity' => 1],
                    ['name' => 'jogurt', 'quantity' => 150],
                    ['name' => 'miód', 'quantity' => 10],
                    ['name' => 'pomarańcza', 'quantity' => 1],
                ],
                'image_path' => 'recipes/strawberry-banana-smoothie.jpg',
            ],
            [                'name' => '4ABC2 Sałatka Grecka',
                'description' => 'Klasyczna sałatka grecka z pomidorem, ogórkiem, oliwkami i fetą.',
                'instruction' => '1. Pokrój pomidory, ogórki i cebulę.
                      2. Dodaj oliwki i pokruszoną fetę.
                      3. Skrop oliwą z oliwek, dopraw solą i pieprzem.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'pomidor', 'quantity' => 2],
                    ['name' => 'ogórek', 'quantity' => 1],
                    ['name' => 'cebula', 'quantity' => 1],
                    ['name' => 'oliwki', 'quantity' => 30],
                    ['name' => 'ser feta', 'quantity' => 30],
                    ['name' => 'oliwa z oliwek', 'quantity' => 15],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/greek-salad.jpg',
            ],
            [                'name' => '4ABC2 Kremowa Zupa Brokułowa',
                'description' => 'Delikatna zupa kremowa z soczystym brokułem i serem parmezan.',
                'instruction' => '1. Gotuj brokuły na parze do miękkości.
                      2. Rozblenduj je z gorącym mlekiem i serem parmezan.
                      3. Dopraw solą i pieprzem, podawaj z grzankami.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'brokuł', 'quantity' => 1],
                    ['name' => 'mleko', 'quantity' => 200],
                    ['name' => 'ser parmezan', 'quantity' => 30],
                    ['name' => 'grzanki', 'quantity' => 50],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/cream-of-broccoli-soup.jpg',
            ],
            [                'name' => '4ABC2 Kotlety Schabowe',
                'description' => 'Tradycyjne kotlety schabowe smażone na maśle klarowanym.',
                'instruction' => '1. Rozbij kotlety schabowe, dopraw solą i pieprzem.
                      2. Obtocz w mące, jajku i bułce tartej.
                      3. Smaż na maśle klarowanym z obu stron do zarumienienia.',
                'diet' => null,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'kotlet schabowy', 'quantity' => 2],
                    ['name' => 'masło', 'quantity' => 30],
                    ['name' => 'mąka', 'quantity' => 30],
                    ['name' => 'jajko', 'quantity' => 1],
                    ['name' => 'bułka tarta', 'quantity' => 30],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/pork-cutlets.jpg',
            ],
            [                'name' => '4ABC2 Sałatka z Komosą Ryżową',
                'description' => 'Zdrowa sałatka z komosą ryżową, pieczonymi warzywami i sosem jogurtowym.',
                'instruction' => '1. Ugotuj komosę ryżową według instrukcji na opakowaniu.
                      2. Piecz warzywa (np. batata, paprykę, cukinię) z odrobiną oliwy.
                      3. Połącz komosę ryżową, warzywa.
                      4. Skrop sosem jogurtowym i podawaj.',
                'diet' => RecipeDiet::VEGAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'komosa ryżowa', 'quantity' => 100],
                    ['name' => 'batat', 'quantity' => 1],
                    ['name' => 'papryka', 'quantity' => 1],
                    ['name' => 'cukinia', 'quantity' => 1],
                    ['name' => 'oliwa z oliwek', 'quantity' => 15],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                    ['name' => 'jogurt', 'quantity' => 30],
                ],
                'image_path' => 'recipes/quinoa-veggie-salad.jpg',
            ],
            [                'name' => '4ABC2 Krem z Dyni',
                'description' => 'Delikatny krem z dyni z nutą cynamonu i orzechów.',
                'instruction' => '1. Upiecz kawałki dyni w piekarniku.
                      2. Rozblenduj dynię z ciepłym mlekiem roślinnym.
                      3. Dodaj cynamon, orzechy i sól. Podawaj gorący.',
                'diet' => RecipeDiet::VEGAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'dynia', 'quantity' => 200],
                    ['name' => 'mleko owsiane', 'quantity' => 200],
                    ['name' => 'cynamon', 'quantity' => 5],
                    ['name' => 'orzechy włoskie', 'quantity' => 10],
                    ['name' => 'sól', 'quantity' => 5],
                ],
                'image_path' => 'recipes/pumpkin-soup.jpg',
            ],
            [                'name' => '5Kremowy Kurczak z Pieczarkami',
                'description' => 'Delikatne kawałki kurczaka w kremowym sosie z pieczarkami.',
                'instruction' => '1. Na patelni rozgrzej olej i zrumień kawałki kurczaka.
                      2. Dodaj posiekane pieczarki i smaż do zmiękczenia.
                      3. Wlej śmietankę i gotuj na małym ogniu przez 10 minut.
                      4. Dopraw solą, pieprzem i posyp posiekanym koperkiem.',
                'diet' => null,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'pierś z kurczaka', 'quantity' => 300],
                    ['name' => 'olej roślinny', 'quantity' => 30],
                    ['name' => 'pieczarki', 'quantity' => 200],
                    ['name' => 'śmietanka do kawy', 'quantity' => 200],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                    ['name' => 'koperek', 'quantity' => 10],
                ],
                'image_path' => 'recipes/creamy-chicken-mushrooms.jpg',
            ],
            [                'name' => '5Sałatka z Grilowanym Łososiem',
                'description' => 'Klasyczna sałatka Cezar z dodatkiem soczystego grilowanego łososia.',
                'instruction' => '1. Griluj filet łososia przez 4 minuty z każdej strony.
                      2. Na talerzu ułóż sałatę, pokrojonego łososia, posyp parmezanem.
                      3. Polej sosem Cezar i udekoruj kawałkami grzanki.',
                'diet' => null,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'filet z łososia', 'quantity' => 150],
                    ['name' => 'ser parmezan', 'quantity' => 30],
                    ['name' => 'sałata', 'quantity' => 100],
                    ['name' => 'grzanki', 'quantity' => 50],
                ],
                'image_path' => 'recipes/caesar-salad-salmon.jpg',
            ],
            [                'name' => '5Wegetariańskie Curry z Batatem',
                'description' => 'Pikantne wegetariańskie curry z batatem, ciecierzycą i szpinakiem.',
                'instruction' => '1. W garnku podsmaż czosnek i cebulę na oleju.
                      2. Dodaj pokrojonego w kostkę batata, ciecierzycę i przyprawy curry.
                      3. Wlej mleko kokosowe i gotuj do miękkości batata.
                      4. Na końcu dodaj szpinak i gotuj jeszcze 3 minuty.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::LONG,
                'ingredients' => [
                    ['name' => 'batat', 'quantity' => 200],
                    ['name' => 'ciecierzyca', 'quantity' => 150],
                    ['name' => 'szpinak', 'quantity' => 100],
                    ['name' => 'mleko', 'quantity' => 200],
                    ['name' => 'olej roślinny', 'quantity' => 30],
                    ['name' => 'czosnek', 'quantity' => 10],
                ],
                'image_path' => 'recipes/vegetarian-curry-sweet-potato.jpg',
            ],
            [                'name' => '5Makaron Penne z Sosem Serowym',
                'description' => 'Kremowy makaron penne w bogatym sosie serowym.',
                'instruction' => '1. Ugotuj makaron penne al dente.
                      2. Na patelni rozpuść masło, dodaj śmietanę i ser, mieszając do uzyskania gładkiego sosu.
                      3. Dodaj ugotowany makaron do sosu, mieszaj i podawaj z posiekaną bazylią.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'penne', 'quantity' => 200],
                    ['name' => 'masło', 'quantity' => 30],
                    ['name' => 'śmietana kremówka', 'quantity' => 100],
                    ['name' => 'ser', 'quantity' => 50],
                    ['name' => 'bazylia', 'quantity' => 5],
                ],
                'image_path' => 'recipes/penne-cheese-sauce.jpg',
            ],
            [                'name' => '5Pieczona Kaczka z Jabłkami',
                'description' => 'Soczysta pieczona kaczka z jabłkami i ziołami.',
                'instruction' => '1. Kaczkę natrzyj solą, pieprzem i ziołami.
                      2. Włóż do środka pokrojone jabłka.
                      3. Piecz w piekarniku przez 1,5 godziny w temperaturze 180°C.
                      4. Podawaj z pieczonymi jabłkami i sosie z pieczenia.',
                'diet' => null,
                'time' => RecipeTime::LONG,
                'ingredients' => [
                    ['name' => 'kaczka', 'quantity' => 1000],
                    ['name' => 'jabłko', 'quantity' => 2],
                    ['name' => 'sól', 'quantity' => 10],
                    ['name' => 'pieprz', 'quantity' => 5],
                    ['name' => 'rozmaryn', 'quantity' => 5],
                    ['name' => 'tymianek', 'quantity' => 5],
                ],
                'image_path' => 'recipes/roasted-duck-apples.jpg',
            ],
            [                'name' => '5Omlet z Serem i Szpinakiem',
                'description' => 'Puszysty omlet z serem, świeżym szpinakiem i cebulą.',
                'instruction' => '1. Roztrzep jajka w misce, dodaj posiekany szpinak i cebulę.
                      2. Na patelni rozgrzej masło i wlej masę jajeczną.
                      3. Posyp startym serem i smaż na małym ogniu do zastygnięcia.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'jajko', 'quantity' => 2],
                    ['name' => 'ser', 'quantity' => 30],
                    ['name' => 'szpinak', 'quantity' => 50],
                    ['name' => 'cebula', 'quantity' => 1],
                    ['name' => 'masło', 'quantity' => 10],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/spinach-cheese-omelette.jpg',
            ],
            [                'name' => '5Koktajl Truskawkowy z Bananem',
                'description' => 'Orzeźwiający koktajl z truskawkami, bananem i jogurtem.',
                'instruction' => '1. W blenderze połącz truskawki, banana, jogurt i miód.
                      2. Miksuj do uzyskania gładkiego koktajlu.
                      3. Podawaj schłodzone z plasterkiem pomarańczy.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'truskawka', 'quantity' => 20],
                    ['name' => 'banan', 'quantity' => 1],
                    ['name' => 'jogurt', 'quantity' => 150],
                    ['name' => 'miód', 'quantity' => 10],
                    ['name' => 'pomarańcza', 'quantity' => 1],
                ],
                'image_path' => 'recipes/strawberry-banana-smoothie.jpg',
            ],
            [                'name' => '5Sałatka Grecka',
                'description' => 'Klasyczna sałatka grecka z pomidorem, ogórkiem, oliwkami i fetą.',
                'instruction' => '1. Pokrój pomidory, ogórki i cebulę.
                      2. Dodaj oliwki i pokruszoną fetę.
                      3. Skrop oliwą z oliwek, dopraw solą i pieprzem.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'pomidor', 'quantity' => 2],
                    ['name' => 'ogórek', 'quantity' => 1],
                    ['name' => 'cebula', 'quantity' => 1],
                    ['name' => 'oliwki', 'quantity' => 30],
                    ['name' => 'ser feta', 'quantity' => 30],
                    ['name' => 'oliwa z oliwek', 'quantity' => 15],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/greek-salad.jpg',
            ],
            [                'name' => '5Kremowa Zupa Brokułowa',
                'description' => 'Delikatna zupa kremowa z soczystym brokułem i serem parmezan.',
                'instruction' => '1. Gotuj brokuły na parze do miękkości.
                      2. Rozblenduj je z gorącym mlekiem i serem parmezan.
                      3. Dopraw solą i pieprzem, podawaj z grzankami.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'brokuł', 'quantity' => 1],
                    ['name' => 'mleko', 'quantity' => 200],
                    ['name' => 'ser parmezan', 'quantity' => 30],
                    ['name' => 'grzanki', 'quantity' => 50],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/cream-of-broccoli-soup.jpg',
            ],
            [                'name' => '5Kotlety Schabowe',
                'description' => 'Tradycyjne kotlety schabowe smażone na maśle klarowanym.',
                'instruction' => '1. Rozbij kotlety schabowe, dopraw solą i pieprzem.
                      2. Obtocz w mące, jajku i bułce tartej.
                      3. Smaż na maśle klarowanym z obu stron do zarumienienia.',
                'diet' => null,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'kotlet schabowy', 'quantity' => 2],
                    ['name' => 'masło', 'quantity' => 30],
                    ['name' => 'mąka', 'quantity' => 30],
                    ['name' => 'jajko', 'quantity' => 1],
                    ['name' => 'bułka tarta', 'quantity' => 30],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/pork-cutlets.jpg',
            ],
            [                'name' => '5Sałatka z Komosą Ryżową',
                'description' => 'Zdrowa sałatka z komosą ryżową, pieczonymi warzywami i sosem jogurtowym.',
                'instruction' => '1. Ugotuj komosę ryżową według instrukcji na opakowaniu.
                      2. Piecz warzywa (np. batata, paprykę, cukinię) z odrobiną oliwy.
                      3. Połącz komosę ryżową, warzywa.
                      4. Skrop sosem jogurtowym i podawaj.',
                'diet' => RecipeDiet::VEGAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'komosa ryżowa', 'quantity' => 100],
                    ['name' => 'batat', 'quantity' => 1],
                    ['name' => 'papryka', 'quantity' => 1],
                    ['name' => 'cukinia', 'quantity' => 1],
                    ['name' => 'oliwa z oliwek', 'quantity' => 15],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                    ['name' => 'jogurt', 'quantity' => 30],
                ],
                'image_path' => 'recipes/quinoa-veggie-salad.jpg',
            ],
            [                'name' => '5Krem z Dyni',
                'description' => 'Delikatny krem z dyni z nutą cynamonu i orzechów.',
                'instruction' => '1. Upiecz kawałki dyni w piekarniku.
                      2. Rozblenduj dynię z ciepłym mlekiem roślinnym.
                      3. Dodaj cynamon, orzechy i sól. Podawaj gorący.',
                'diet' => RecipeDiet::VEGAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'dynia', 'quantity' => 200],
                    ['name' => 'mleko owsiane', 'quantity' => 200],
                    ['name' => 'cynamon', 'quantity' => 5],
                    ['name' => 'orzechy włoskie', 'quantity' => 10],
                    ['name' => 'sól', 'quantity' => 5],
                ],
                'image_path' => 'recipes/pumpkin-soup.jpg',
            ],
            [                'name' => '5Kasza Jaglana z Warzywami',
                'description' => 'Kasza jaglana z duszonymi warzywami i sosie pomidorowym.',
                'instruction' => '1. Ugotuj kaszę jaglaną zgodnie z instrukcją.
                      2. Podsmaż cebulę i czosnek, dodaj pokrojone warzywa (np. cukinię, paprykę).
                      3. Dodaj sos pomidorowy i dusz warzywa.
                      4. Podawaj z ugotowaną kaszą.',
                'diet' => RecipeDiet::VEGAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'kasza jaglana', 'quantity' => 100],
                    ['name' => 'cebula', 'quantity' => 1],
                    ['name' => 'czosnek', 'quantity' => 2],
                    ['name' => 'cukinia', 'quantity' => 1],
                    ['name' => 'papryka', 'quantity' => 1],
                    ['name' => 'pomidor', 'quantity' => 2],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/buckwheat-vegetable-stir-fry.jpg',
            ],
            [                'name' => '5XYZ Kasza Jaglana z Warzywami',
                'description' => 'Kasza jaglana z duszonymi warzywami i sosie pomidorowym.',
                'instruction' => '1. Ugotuj kaszę jaglaną zgodnie z instrukcją.
                      2. Podsmaż cebulę i czosnek, dodaj pokrojone warzywa (np. cukinię, paprykę).
                      3. Dodaj sos pomidorowy i dusz warzywa.
                      4. Podawaj z ugotowaną kaszą.',
                'diet' => RecipeDiet::VEGAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'kasza jaglana', 'quantity' => 100],
                    ['name' => 'cebula', 'quantity' => 1],
                    ['name' => 'czosnek', 'quantity' => 2],
                    ['name' => 'cukinia', 'quantity' => 1],
                    ['name' => 'papryka', 'quantity' => 1],
                    ['name' => 'pomidor', 'quantity' => 2],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/buckwheat-vegetable-stir-fry.jpg',
            ],
            [                'name' => '5XYZ Kremowy Kurczak z Pieczarkami',
                'description' => 'Delikatne kawałki kurczaka w kremowym sosie z pieczarkami.',
                'instruction' => '1. Na patelni rozgrzej olej i zrumień kawałki kurczaka.
                      2. Dodaj posiekane pieczarki i smaż do zmiękczenia.
                      3. Wlej śmietankę i gotuj na małym ogniu przez 10 minut.
                      4. Dopraw solą, pieprzem i posyp posiekanym koperkiem.',
                'diet' => null,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'pierś z kurczaka', 'quantity' => 300],
                    ['name' => 'olej roślinny', 'quantity' => 30],
                    ['name' => 'pieczarki', 'quantity' => 200],
                    ['name' => 'śmietanka do kawy', 'quantity' => 200],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                    ['name' => 'koperek', 'quantity' => 10],
                ],
                'image_path' => 'recipes/creamy-chicken-mushrooms.jpg',
            ],
            [                'name' => '5XYZ Sałatka z Grilowanym Łososiem',
                'description' => 'Klasyczna sałatka Cezar z dodatkiem soczystego grilowanego łososia.',
                'instruction' => '1. Griluj filet łososia przez 4 minuty z każdej strony.
                      2. Na talerzu ułóż sałatę, pokrojonego łososia, posyp parmezanem.
                      3. Polej sosem Cezar i udekoruj kawałkami grzanki.',
                'diet' => null,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'filet z łososia', 'quantity' => 150],
                    ['name' => 'ser parmezan', 'quantity' => 30],
                    ['name' => 'sałata', 'quantity' => 100],
                    ['name' => 'grzanki', 'quantity' => 50],
                ],
                'image_path' => 'recipes/caesar-salad-salmon.jpg',
            ],
            [                'name' => '5XYZ Wegetariańskie Curry z Batatem',
                'description' => 'Pikantne wegetariańskie curry z batatem, ciecierzycą i szpinakiem.',
                'instruction' => '1. W garnku podsmaż czosnek i cebulę na oleju.
                      2. Dodaj pokrojonego w kostkę batata, ciecierzycę i przyprawy curry.
                      3. Wlej mleko kokosowe i gotuj do miękkości batata.
                      4. Na końcu dodaj szpinak i gotuj jeszcze 3 minuty.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::LONG,
                'ingredients' => [
                    ['name' => 'batat', 'quantity' => 200],
                    ['name' => 'ciecierzyca', 'quantity' => 150],
                    ['name' => 'szpinak', 'quantity' => 100],
                    ['name' => 'mleko', 'quantity' => 200],
                    ['name' => 'olej roślinny', 'quantity' => 30],
                    ['name' => 'czosnek', 'quantity' => 10],
                ],
                'image_path' => 'recipes/vegetarian-curry-sweet-potato.jpg',
            ],
            [                'name' => '5XYZ Makaron Penne z Sosem Serowym',
                'description' => 'Kremowy makaron penne w bogatym sosie serowym.',
                'instruction' => '1. Ugotuj makaron penne al dente.
                      2. Na patelni rozpuść masło, dodaj śmietanę i ser, mieszając do uzyskania gładkiego sosu.
                      3. Dodaj ugotowany makaron do sosu, mieszaj i podawaj z posiekaną bazylią.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'penne', 'quantity' => 200],
                    ['name' => 'masło', 'quantity' => 30],
                    ['name' => 'śmietana kremówka', 'quantity' => 100],
                    ['name' => 'ser', 'quantity' => 50],
                    ['name' => 'bazylia', 'quantity' => 5],
                ],
                'image_path' => 'recipes/penne-cheese-sauce.jpg',
            ],
            [                'name' => '5XYZ Pieczona Kaczka z Jabłkami',
                'description' => 'Soczysta pieczona kaczka z jabłkami i ziołami.',
                'instruction' => '1. Kaczkę natrzyj solą, pieprzem i ziołami.
                      2. Włóż do środka pokrojone jabłka.
                      3. Piecz w piekarniku przez 1,5 godziny w temperaturze 180°C.
                      4. Podawaj z pieczonymi jabłkami i sosie z pieczenia.',
                'diet' => null,
                'time' => RecipeTime::LONG,
                'ingredients' => [
                    ['name' => 'kaczka', 'quantity' => 1000],
                    ['name' => 'jabłko', 'quantity' => 2],
                    ['name' => 'sól', 'quantity' => 10],
                    ['name' => 'pieprz', 'quantity' => 5],
                    ['name' => 'rozmaryn', 'quantity' => 5],
                    ['name' => 'tymianek', 'quantity' => 5],
                ],
                'image_path' => 'recipes/roasted-duck-apples.jpg',
            ],
            [                'name' => '5XYZ Omlet z Serem i Szpinakiem',
                'description' => 'Puszysty omlet z serem, świeżym szpinakiem i cebulą.',
                'instruction' => '1. Roztrzep jajka w misce, dodaj posiekany szpinak i cebulę.
                      2. Na patelni rozgrzej masło i wlej masę jajeczną.
                      3. Posyp startym serem i smaż na małym ogniu do zastygnięcia.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'jajko', 'quantity' => 2],
                    ['name' => 'ser', 'quantity' => 30],
                    ['name' => 'szpinak', 'quantity' => 50],
                    ['name' => 'cebula', 'quantity' => 1],
                    ['name' => 'masło', 'quantity' => 10],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/spinach-cheese-omelette.jpg',
            ],
            [                'name' => '5XYZ Koktajl Truskawkowy z Bananem',
                'description' => 'Orzeźwiający koktajl z truskawkami, bananem i jogurtem.',
                'instruction' => '1. W blenderze połącz truskawki, banana, jogurt i miód.
                      2. Miksuj do uzyskania gładkiego koktajlu.
                      3. Podawaj schłodzone z plasterkiem pomarańczy.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'truskawka', 'quantity' => 20],
                    ['name' => 'banan', 'quantity' => 1],
                    ['name' => 'jogurt', 'quantity' => 150],
                    ['name' => 'miód', 'quantity' => 10],
                    ['name' => 'pomarańcza', 'quantity' => 1],
                ],
                'image_path' => 'recipes/strawberry-banana-smoothie.jpg',
            ],
            [                'name' => '5XYZ Sałatka Grecka',
                'description' => 'Klasyczna sałatka grecka z pomidorem, ogórkiem, oliwkami i fetą.',
                'instruction' => '1. Pokrój pomidory, ogórki i cebulę.
                      2. Dodaj oliwki i pokruszoną fetę.
                      3. Skrop oliwą z oliwek, dopraw solą i pieprzem.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'pomidor', 'quantity' => 2],
                    ['name' => 'ogórek', 'quantity' => 1],
                    ['name' => 'cebula', 'quantity' => 1],
                    ['name' => 'oliwki', 'quantity' => 30],
                    ['name' => 'ser feta', 'quantity' => 30],
                    ['name' => 'oliwa z oliwek', 'quantity' => 15],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/greek-salad.jpg',
            ],
            [                'name' => '5XYZ Kremowa Zupa Brokułowa',
                'description' => 'Delikatna zupa kremowa z soczystym brokułem i serem parmezan.',
                'instruction' => '1. Gotuj brokuły na parze do miękkości.
                      2. Rozblenduj je z gorącym mlekiem i serem parmezan.
                      3. Dopraw solą i pieprzem, podawaj z grzankami.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'brokuł', 'quantity' => 1],
                    ['name' => 'mleko', 'quantity' => 200],
                    ['name' => 'ser parmezan', 'quantity' => 30],
                    ['name' => 'grzanki', 'quantity' => 50],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/cream-of-broccoli-soup.jpg',
            ],
            [                'name' => '5XYZ Kotlety Schabowe',
                'description' => 'Tradycyjne kotlety schabowe smażone na maśle klarowanym.',
                'instruction' => '1. Rozbij kotlety schabowe, dopraw solą i pieprzem.
                      2. Obtocz w mące, jajku i bułce tartej.
                      3. Smaż na maśle klarowanym z obu stron do zarumienienia.',
                'diet' => null,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'kotlet schabowy', 'quantity' => 2],
                    ['name' => 'masło', 'quantity' => 30],
                    ['name' => 'mąka', 'quantity' => 30],
                    ['name' => 'jajko', 'quantity' => 1],
                    ['name' => 'bułka tarta', 'quantity' => 30],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/pork-cutlets.jpg',
            ],
            [                'name' => '5XYZ Sałatka z Komosą Ryżową',
                'description' => 'Zdrowa sałatka z komosą ryżową, pieczonymi warzywami i sosem jogurtowym.',
                'instruction' => '1. Ugotuj komosę ryżową według instrukcji na opakowaniu.
                      2. Piecz warzywa (np. batata, paprykę, cukinię) z odrobiną oliwy.
                      3. Połącz komosę ryżową, warzywa.
                      4. Skrop sosem jogurtowym i podawaj.',
                'diet' => RecipeDiet::VEGAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'komosa ryżowa', 'quantity' => 100],
                    ['name' => 'batat', 'quantity' => 1],
                    ['name' => 'papryka', 'quantity' => 1],
                    ['name' => 'cukinia', 'quantity' => 1],
                    ['name' => 'oliwa z oliwek', 'quantity' => 15],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                    ['name' => 'jogurt', 'quantity' => 30],
                ],
                'image_path' => 'recipes/quinoa-veggie-salad.jpg',
            ],
            [                'name' => '5XYZ Krem z Dyni',
                'description' => 'Delikatny krem z dyni z nutą cynamonu i orzechów.',
                'instruction' => '1. Upiecz kawałki dyni w piekarniku.
                      2. Rozblenduj dynię z ciepłym mlekiem roślinnym.
                      3. Dodaj cynamon, orzechy i sól. Podawaj gorący.',
                'diet' => RecipeDiet::VEGAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'dynia', 'quantity' => 200],
                    ['name' => 'mleko owsiane', 'quantity' => 200],
                    ['name' => 'cynamon', 'quantity' => 5],
                    ['name' => 'orzechy włoskie', 'quantity' => 10],
                    ['name' => 'sól', 'quantity' => 5],
                ],
                'image_path' => 'recipes/pumpkin-soup.jpg',
            ],
            [                'name' => '5ABC1 Kasza Jaglana z Warzywami',
                'description' => 'Kasza jaglana z duszonymi warzywami i sosie pomidorowym.',
                'instruction' => '1. Ugotuj kaszę jaglaną zgodnie z instrukcją.
                      2. Podsmaż cebulę i czosnek, dodaj pokrojone warzywa (np. cukinię, paprykę).
                      3. Dodaj sos pomidorowy i dusz warzywa.
                      4. Podawaj z ugotowaną kaszą.',
                'diet' => RecipeDiet::VEGAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'kasza jaglana', 'quantity' => 100],
                    ['name' => 'cebula', 'quantity' => 1],
                    ['name' => 'czosnek', 'quantity' => 2],
                    ['name' => 'cukinia', 'quantity' => 1],
                    ['name' => 'papryka', 'quantity' => 1],
                    ['name' => 'pomidor', 'quantity' => 2],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/buckwheat-vegetable-stir-fry.jpg',
            ],
            [                'name' => '5ABC1 Kremowy Kurczak z Pieczarkami',
                'description' => 'Delikatne kawałki kurczaka w kremowym sosie z pieczarkami.',
                'instruction' => '1. Na patelni rozgrzej olej i zrumień kawałki kurczaka.
                      2. Dodaj posiekane pieczarki i smaż do zmiękczenia.
                      3. Wlej śmietankę i gotuj na małym ogniu przez 10 minut.
                      4. Dopraw solą, pieprzem i posyp posiekanym koperkiem.',
                'diet' => null,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'pierś z kurczaka', 'quantity' => 300],
                    ['name' => 'olej roślinny', 'quantity' => 30],
                    ['name' => 'pieczarki', 'quantity' => 200],
                    ['name' => 'śmietanka do kawy', 'quantity' => 200],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                    ['name' => 'koperek', 'quantity' => 10],
                ],
                'image_path' => 'recipes/creamy-chicken-mushrooms.jpg',
            ],
            [                'name' => '5ABC1 Sałatka z Grilowanym Łososiem',
                'description' => 'Klasyczna sałatka Cezar z dodatkiem soczystego grilowanego łososia.',
                'instruction' => '1. Griluj filet łososia przez 4 minuty z każdej strony.
                      2. Na talerzu ułóż sałatę, pokrojonego łososia, posyp parmezanem.
                      3. Polej sosem Cezar i udekoruj kawałkami grzanki.',
                'diet' => null,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'filet z łososia', 'quantity' => 150],
                    ['name' => 'ser parmezan', 'quantity' => 30],
                    ['name' => 'sałata', 'quantity' => 100],
                    ['name' => 'grzanki', 'quantity' => 50],
                ],
                'image_path' => 'recipes/caesar-salad-salmon.jpg',
            ],
            [                'name' => '5ABC1 Wegetariańskie Curry z Batatem',
                'description' => 'Pikantne wegetariańskie curry z batatem, ciecierzycą i szpinakiem.',
                'instruction' => '1. W garnku podsmaż czosnek i cebulę na oleju.
                      2. Dodaj pokrojonego w kostkę batata, ciecierzycę i przyprawy curry.
                      3. Wlej mleko kokosowe i gotuj do miękkości batata.
                      4. Na końcu dodaj szpinak i gotuj jeszcze 3 minuty.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::LONG,
                'ingredients' => [
                    ['name' => 'batat', 'quantity' => 200],
                    ['name' => 'ciecierzyca', 'quantity' => 150],
                    ['name' => 'szpinak', 'quantity' => 100],
                    ['name' => 'mleko', 'quantity' => 200],
                    ['name' => 'olej roślinny', 'quantity' => 30],
                    ['name' => 'czosnek', 'quantity' => 10],
                ],
                'image_path' => 'recipes/vegetarian-curry-sweet-potato.jpg',
            ],
            [                'name' => '5ABC1 Makaron Penne z Sosem Serowym',
                'description' => 'Kremowy makaron penne w bogatym sosie serowym.',
                'instruction' => '1. Ugotuj makaron penne al dente.
                      2. Na patelni rozpuść masło, dodaj śmietanę i ser, mieszając do uzyskania gładkiego sosu.
                      3. Dodaj ugotowany makaron do sosu, mieszaj i podawaj z posiekaną bazylią.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'penne', 'quantity' => 200],
                    ['name' => 'masło', 'quantity' => 30],
                    ['name' => 'śmietana kremówka', 'quantity' => 100],
                    ['name' => 'ser', 'quantity' => 50],
                    ['name' => 'bazylia', 'quantity' => 5],
                ],
                'image_path' => 'recipes/penne-cheese-sauce.jpg',
            ],
            [                'name' => '5ABC1 Pieczona Kaczka z Jabłkami',
                'description' => 'Soczysta pieczona kaczka z jabłkami i ziołami.',
                'instruction' => '1. Kaczkę natrzyj solą, pieprzem i ziołami.
                      2. Włóż do środka pokrojone jabłka.
                      3. Piecz w piekarniku przez 1,5 godziny w temperaturze 180°C.
                      4. Podawaj z pieczonymi jabłkami i sosie z pieczenia.',
                'diet' => null,
                'time' => RecipeTime::LONG,
                'ingredients' => [
                    ['name' => 'kaczka', 'quantity' => 1000],
                    ['name' => 'jabłko', 'quantity' => 2],
                    ['name' => 'sól', 'quantity' => 10],
                    ['name' => 'pieprz', 'quantity' => 5],
                    ['name' => 'rozmaryn', 'quantity' => 5],
                    ['name' => 'tymianek', 'quantity' => 5],
                ],
                'image_path' => 'recipes/roasted-duck-apples.jpg',
            ],
            [                'name' => '5ABC1 Omlet z Serem i Szpinakiem',
                'description' => 'Puszysty omlet z serem, świeżym szpinakiem i cebulą.',
                'instruction' => '1. Roztrzep jajka w misce, dodaj posiekany szpinak i cebulę.
                      2. Na patelni rozgrzej masło i wlej masę jajeczną.
                      3. Posyp startym serem i smaż na małym ogniu do zastygnięcia.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'jajko', 'quantity' => 2],
                    ['name' => 'ser', 'quantity' => 30],
                    ['name' => 'szpinak', 'quantity' => 50],
                    ['name' => 'cebula', 'quantity' => 1],
                    ['name' => 'masło', 'quantity' => 10],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/spinach-cheese-omelette.jpg',
            ],
            [                'name' => '5ABC1 Koktajl Truskawkowy z Bananem',
                'description' => 'Orzeźwiający koktajl z truskawkami, bananem i jogurtem.',
                'instruction' => '1. W blenderze połącz truskawki, banana, jogurt i miód.
                      2. Miksuj do uzyskania gładkiego koktajlu.
                      3. Podawaj schłodzone z plasterkiem pomarańczy.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'truskawka', 'quantity' => 20],
                    ['name' => 'banan', 'quantity' => 1],
                    ['name' => 'jogurt', 'quantity' => 150],
                    ['name' => 'miód', 'quantity' => 10],
                    ['name' => 'pomarańcza', 'quantity' => 1],
                ],
                'image_path' => 'recipes/strawberry-banana-smoothie.jpg',
            ],
            [                'name' => '5ABC1 Sałatka Grecka',
                'description' => 'Klasyczna sałatka grecka z pomidorem, ogórkiem, oliwkami i fetą.',
                'instruction' => '1. Pokrój pomidory, ogórki i cebulę.
                      2. Dodaj oliwki i pokruszoną fetę.
                      3. Skrop oliwą z oliwek, dopraw solą i pieprzem.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'pomidor', 'quantity' => 2],
                    ['name' => 'ogórek', 'quantity' => 1],
                    ['name' => 'cebula', 'quantity' => 1],
                    ['name' => 'oliwki', 'quantity' => 30],
                    ['name' => 'ser feta', 'quantity' => 30],
                    ['name' => 'oliwa z oliwek', 'quantity' => 15],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/greek-salad.jpg',
            ],
            [                'name' => '5ABC1 Kremowa Zupa Brokułowa',
                'description' => 'Delikatna zupa kremowa z soczystym brokułem i serem parmezan.',
                'instruction' => '1. Gotuj brokuły na parze do miękkości.
                      2. Rozblenduj je z gorącym mlekiem i serem parmezan.
                      3. Dopraw solą i pieprzem, podawaj z grzankami.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'brokuł', 'quantity' => 1],
                    ['name' => 'mleko', 'quantity' => 200],
                    ['name' => 'ser parmezan', 'quantity' => 30],
                    ['name' => 'grzanki', 'quantity' => 50],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/cream-of-broccoli-soup.jpg',
            ],
            [                'name' => '5ABC1 Kotlety Schabowe',
                'description' => 'Tradycyjne kotlety schabowe smażone na maśle klarowanym.',
                'instruction' => '1. Rozbij kotlety schabowe, dopraw solą i pieprzem.
                      2. Obtocz w mące, jajku i bułce tartej.
                      3. Smaż na maśle klarowanym z obu stron do zarumienienia.',
                'diet' => null,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'kotlet schabowy', 'quantity' => 2],
                    ['name' => 'masło', 'quantity' => 30],
                    ['name' => 'mąka', 'quantity' => 30],
                    ['name' => 'jajko', 'quantity' => 1],
                    ['name' => 'bułka tarta', 'quantity' => 30],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/pork-cutlets.jpg',
            ],
            [                'name' => '5ABC1 Sałatka z Komosą Ryżową',
                'description' => 'Zdrowa sałatka z komosą ryżową, pieczonymi warzywami i sosem jogurtowym.',
                'instruction' => '1. Ugotuj komosę ryżową według instrukcji na opakowaniu.
                      2. Piecz warzywa (np. batata, paprykę, cukinię) z odrobiną oliwy.
                      3. Połącz komosę ryżową, warzywa.
                      4. Skrop sosem jogurtowym i podawaj.',
                'diet' => RecipeDiet::VEGAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'komosa ryżowa', 'quantity' => 100],
                    ['name' => 'batat', 'quantity' => 1],
                    ['name' => 'papryka', 'quantity' => 1],
                    ['name' => 'cukinia', 'quantity' => 1],
                    ['name' => 'oliwa z oliwek', 'quantity' => 15],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                    ['name' => 'jogurt', 'quantity' => 30],
                ],
                'image_path' => 'recipes/quinoa-veggie-salad.jpg',
            ],
            [                'name' => '5ABC1 Krem z Dyni',
                'description' => 'Delikatny krem z dyni z nutą cynamonu i orzechów.',
                'instruction' => '1. Upiecz kawałki dyni w piekarniku.
                      2. Rozblenduj dynię z ciepłym mlekiem roślinnym.
                      3. Dodaj cynamon, orzechy i sól. Podawaj gorący.',
                'diet' => RecipeDiet::VEGAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'dynia', 'quantity' => 200],
                    ['name' => 'mleko owsiane', 'quantity' => 200],
                    ['name' => 'cynamon', 'quantity' => 5],
                    ['name' => 'orzechy włoskie', 'quantity' => 10],
                    ['name' => 'sól', 'quantity' => 5],
                ],
                'image_path' => 'recipes/pumpkin-soup.jpg',
            ],
            [                'name' => '5ABC2 Kasza Jaglana z Warzywami',
                'description' => 'Kasza jaglana z duszonymi warzywami i sosie pomidorowym.',
                'instruction' => '1. Ugotuj kaszę jaglaną zgodnie z instrukcją.
                      2. Podsmaż cebulę i czosnek, dodaj pokrojone warzywa (np. cukinię, paprykę).
                      3. Dodaj sos pomidorowy i dusz warzywa.
                      4. Podawaj z ugotowaną kaszą.',
                'diet' => RecipeDiet::VEGAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'kasza jaglana', 'quantity' => 100],
                    ['name' => 'cebula', 'quantity' => 1],
                    ['name' => 'czosnek', 'quantity' => 2],
                    ['name' => 'cukinia', 'quantity' => 1],
                    ['name' => 'papryka', 'quantity' => 1],
                    ['name' => 'pomidor', 'quantity' => 2],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/buckwheat-vegetable-stir-fry.jpg',
            ],
            [                'name' => '5ABC2 Kremowy Kurczak z Pieczarkami',
                'description' => 'Delikatne kawałki kurczaka w kremowym sosie z pieczarkami.',
                'instruction' => '1. Na patelni rozgrzej olej i zrumień kawałki kurczaka.
                      2. Dodaj posiekane pieczarki i smaż do zmiękczenia.
                      3. Wlej śmietankę i gotuj na małym ogniu przez 10 minut.
                      4. Dopraw solą, pieprzem i posyp posiekanym koperkiem.',
                'diet' => null,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'pierś z kurczaka', 'quantity' => 300],
                    ['name' => 'olej roślinny', 'quantity' => 30],
                    ['name' => 'pieczarki', 'quantity' => 200],
                    ['name' => 'śmietanka do kawy', 'quantity' => 200],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                    ['name' => 'koperek', 'quantity' => 10],
                ],
                'image_path' => 'recipes/creamy-chicken-mushrooms.jpg',
            ],
            [                'name' => '5ABC2 Sałatka z Grilowanym Łososiem',
                'description' => 'Klasyczna sałatka Cezar z dodatkiem soczystego grilowanego łososia.',
                'instruction' => '1. Griluj filet łososia przez 4 minuty z każdej strony.
                      2. Na talerzu ułóż sałatę, pokrojonego łososia, posyp parmezanem.
                      3. Polej sosem Cezar i udekoruj kawałkami grzanki.',
                'diet' => null,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'filet z łososia', 'quantity' => 150],
                    ['name' => 'ser parmezan', 'quantity' => 30],
                    ['name' => 'sałata', 'quantity' => 100],
                    ['name' => 'grzanki', 'quantity' => 50],
                ],
                'image_path' => 'recipes/caesar-salad-salmon.jpg',
            ],
            [                'name' => '5ABC2 Wegetariańskie Curry z Batatem',
                'description' => 'Pikantne wegetariańskie curry z batatem, ciecierzycą i szpinakiem.',
                'instruction' => '1. W garnku podsmaż czosnek i cebulę na oleju.
                      2. Dodaj pokrojonego w kostkę batata, ciecierzycę i przyprawy curry.
                      3. Wlej mleko kokosowe i gotuj do miękkości batata.
                      4. Na końcu dodaj szpinak i gotuj jeszcze 3 minuty.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::LONG,
                'ingredients' => [
                    ['name' => 'batat', 'quantity' => 200],
                    ['name' => 'ciecierzyca', 'quantity' => 150],
                    ['name' => 'szpinak', 'quantity' => 100],
                    ['name' => 'mleko', 'quantity' => 200],
                    ['name' => 'olej roślinny', 'quantity' => 30],
                    ['name' => 'czosnek', 'quantity' => 10],
                ],
                'image_path' => 'recipes/vegetarian-curry-sweet-potato.jpg',
            ],
            [                'name' => '5ABC2 Makaron Penne z Sosem Serowym',
                'description' => 'Kremowy makaron penne w bogatym sosie serowym.',
                'instruction' => '1. Ugotuj makaron penne al dente.
                      2. Na patelni rozpuść masło, dodaj śmietanę i ser, mieszając do uzyskania gładkiego sosu.
                      3. Dodaj ugotowany makaron do sosu, mieszaj i podawaj z posiekaną bazylią.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'penne', 'quantity' => 200],
                    ['name' => 'masło', 'quantity' => 30],
                    ['name' => 'śmietana kremówka', 'quantity' => 100],
                    ['name' => 'ser', 'quantity' => 50],
                    ['name' => 'bazylia', 'quantity' => 5],
                ],
                'image_path' => 'recipes/penne-cheese-sauce.jpg',
            ],
            [                'name' => '5ABC2 Pieczona Kaczka z Jabłkami',
                'description' => 'Soczysta pieczona kaczka z jabłkami i ziołami.',
                'instruction' => '1. Kaczkę natrzyj solą, pieprzem i ziołami.
                      2. Włóż do środka pokrojone jabłka.
                      3. Piecz w piekarniku przez 1,5 godziny w temperaturze 180°C.
                      4. Podawaj z pieczonymi jabłkami i sosie z pieczenia.',
                'diet' => null,
                'time' => RecipeTime::LONG,
                'ingredients' => [
                    ['name' => 'kaczka', 'quantity' => 1000],
                    ['name' => 'jabłko', 'quantity' => 2],
                    ['name' => 'sól', 'quantity' => 10],
                    ['name' => 'pieprz', 'quantity' => 5],
                    ['name' => 'rozmaryn', 'quantity' => 5],
                    ['name' => 'tymianek', 'quantity' => 5],
                ],
                'image_path' => 'recipes/roasted-duck-apples.jpg',
            ],
            [                'name' => '5ABC2 Omlet z Serem i Szpinakiem',
                'description' => 'Puszysty omlet z serem, świeżym szpinakiem i cebulą.',
                'instruction' => '1. Roztrzep jajka w misce, dodaj posiekany szpinak i cebulę.
                      2. Na patelni rozgrzej masło i wlej masę jajeczną.
                      3. Posyp startym serem i smaż na małym ogniu do zastygnięcia.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'jajko', 'quantity' => 2],
                    ['name' => 'ser', 'quantity' => 30],
                    ['name' => 'szpinak', 'quantity' => 50],
                    ['name' => 'cebula', 'quantity' => 1],
                    ['name' => 'masło', 'quantity' => 10],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/spinach-cheese-omelette.jpg',
            ],
            [                'name' => '5ABC2 Koktajl Truskawkowy z Bananem',
                'description' => 'Orzeźwiający koktajl z truskawkami, bananem i jogurtem.',
                'instruction' => '1. W blenderze połącz truskawki, banana, jogurt i miód.
                      2. Miksuj do uzyskania gładkiego koktajlu.
                      3. Podawaj schłodzone z plasterkiem pomarańczy.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'truskawka', 'quantity' => 20],
                    ['name' => 'banan', 'quantity' => 1],
                    ['name' => 'jogurt', 'quantity' => 150],
                    ['name' => 'miód', 'quantity' => 10],
                    ['name' => 'pomarańcza', 'quantity' => 1],
                ],
                'image_path' => 'recipes/strawberry-banana-smoothie.jpg',
            ],
            [                'name' => '5ABC2 Sałatka Grecka',
                'description' => 'Klasyczna sałatka grecka z pomidorem, ogórkiem, oliwkami i fetą.',
                'instruction' => '1. Pokrój pomidory, ogórki i cebulę.
                      2. Dodaj oliwki i pokruszoną fetę.
                      3. Skrop oliwą z oliwek, dopraw solą i pieprzem.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'pomidor', 'quantity' => 2],
                    ['name' => 'ogórek', 'quantity' => 1],
                    ['name' => 'cebula', 'quantity' => 1],
                    ['name' => 'oliwki', 'quantity' => 30],
                    ['name' => 'ser feta', 'quantity' => 30],
                    ['name' => 'oliwa z oliwek', 'quantity' => 15],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/greek-salad.jpg',
            ],
            [                'name' => '5ABC2 Kremowa Zupa Brokułowa',
                'description' => 'Delikatna zupa kremowa z soczystym brokułem i serem parmezan.',
                'instruction' => '1. Gotuj brokuły na parze do miękkości.
                      2. Rozblenduj je z gorącym mlekiem i serem parmezan.
                      3. Dopraw solą i pieprzem, podawaj z grzankami.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'brokuł', 'quantity' => 1],
                    ['name' => 'mleko', 'quantity' => 200],
                    ['name' => 'ser parmezan', 'quantity' => 30],
                    ['name' => 'grzanki', 'quantity' => 50],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/cream-of-broccoli-soup.jpg',
            ],
            [                'name' => '5ABC2 Kotlety Schabowe',
                'description' => 'Tradycyjne kotlety schabowe smażone na maśle klarowanym.',
                'instruction' => '1. Rozbij kotlety schabowe, dopraw solą i pieprzem.
                      2. Obtocz w mące, jajku i bułce tartej.
                      3. Smaż na maśle klarowanym z obu stron do zarumienienia.',
                'diet' => null,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'kotlet schabowy', 'quantity' => 2],
                    ['name' => 'masło', 'quantity' => 30],
                    ['name' => 'mąka', 'quantity' => 30],
                    ['name' => 'jajko', 'quantity' => 1],
                    ['name' => 'bułka tarta', 'quantity' => 30],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/pork-cutlets.jpg',
            ],
            [                'name' => '5ABC2 Sałatka z Komosą Ryżową',
                'description' => 'Zdrowa sałatka z komosą ryżową, pieczonymi warzywami i sosem jogurtowym.',
                'instruction' => '1. Ugotuj komosę ryżową według instrukcji na opakowaniu.
                      2. Piecz warzywa (np. batata, paprykę, cukinię) z odrobiną oliwy.
                      3. Połącz komosę ryżową, warzywa.
                      4. Skrop sosem jogurtowym i podawaj.',
                'diet' => RecipeDiet::VEGAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'komosa ryżowa', 'quantity' => 100],
                    ['name' => 'batat', 'quantity' => 1],
                    ['name' => 'papryka', 'quantity' => 1],
                    ['name' => 'cukinia', 'quantity' => 1],
                    ['name' => 'oliwa z oliwek', 'quantity' => 15],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                    ['name' => 'jogurt', 'quantity' => 30],
                ],
                'image_path' => 'recipes/quinoa-veggie-salad.jpg',
            ],
            [                'name' => '5ABC2 Krem z Dyni',
                'description' => 'Delikatny krem z dyni z nutą cynamonu i orzechów.',
                'instruction' => '1. Upiecz kawałki dyni w piekarniku.
                      2. Rozblenduj dynię z ciepłym mlekiem roślinnym.
                      3. Dodaj cynamon, orzechy i sól. Podawaj gorący.',
                'diet' => RecipeDiet::VEGAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'dynia', 'quantity' => 200],
                    ['name' => 'mleko owsiane', 'quantity' => 200],
                    ['name' => 'cynamon', 'quantity' => 5],
                    ['name' => 'orzechy włoskie', 'quantity' => 10],
                    ['name' => 'sól', 'quantity' => 5],
                ],
                'image_path' => 'recipes/pumpkin-soup.jpg',
            ],
            [                'name' => '6Kremowy Kurczak z Pieczarkami',
                'description' => 'Delikatne kawałki kurczaka w kremowym sosie z pieczarkami.',
                'instruction' => '1. Na patelni rozgrzej olej i zrumień kawałki kurczaka.
                      2. Dodaj posiekane pieczarki i smaż do zmiękczenia.
                      3. Wlej śmietankę i gotuj na małym ogniu przez 10 minut.
                      4. Dopraw solą, pieprzem i posyp posiekanym koperkiem.',
                'diet' => null,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'pierś z kurczaka', 'quantity' => 300],
                    ['name' => 'olej roślinny', 'quantity' => 30],
                    ['name' => 'pieczarki', 'quantity' => 200],
                    ['name' => 'śmietanka do kawy', 'quantity' => 200],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                    ['name' => 'koperek', 'quantity' => 10],
                ],
                'image_path' => 'recipes/creamy-chicken-mushrooms.jpg',
            ],
            [                'name' => '6Sałatka z Grilowanym Łososiem',
                'description' => 'Klasyczna sałatka Cezar z dodatkiem soczystego grilowanego łososia.',
                'instruction' => '1. Griluj filet łososia przez 4 minuty z każdej strony.
                      2. Na talerzu ułóż sałatę, pokrojonego łososia, posyp parmezanem.
                      3. Polej sosem Cezar i udekoruj kawałkami grzanki.',
                'diet' => null,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'filet z łososia', 'quantity' => 150],
                    ['name' => 'ser parmezan', 'quantity' => 30],
                    ['name' => 'sałata', 'quantity' => 100],
                    ['name' => 'grzanki', 'quantity' => 50],
                ],
                'image_path' => 'recipes/caesar-salad-salmon.jpg',
            ],
            [                'name' => '6Wegetariańskie Curry z Batatem',
                'description' => 'Pikantne wegetariańskie curry z batatem, ciecierzycą i szpinakiem.',
                'instruction' => '1. W garnku podsmaż czosnek i cebulę na oleju.
                      2. Dodaj pokrojonego w kostkę batata, ciecierzycę i przyprawy curry.
                      3. Wlej mleko kokosowe i gotuj do miękkości batata.
                      4. Na końcu dodaj szpinak i gotuj jeszcze 3 minuty.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::LONG,
                'ingredients' => [
                    ['name' => 'batat', 'quantity' => 200],
                    ['name' => 'ciecierzyca', 'quantity' => 150],
                    ['name' => 'szpinak', 'quantity' => 100],
                    ['name' => 'mleko', 'quantity' => 200],
                    ['name' => 'olej roślinny', 'quantity' => 30],
                    ['name' => 'czosnek', 'quantity' => 10],
                ],
                'image_path' => 'recipes/vegetarian-curry-sweet-potato.jpg',
            ],
            [                'name' => '6Makaron Penne z Sosem Serowym',
                'description' => 'Kremowy makaron penne w bogatym sosie serowym.',
                'instruction' => '1. Ugotuj makaron penne al dente.
                      2. Na patelni rozpuść masło, dodaj śmietanę i ser, mieszając do uzyskania gładkiego sosu.
                      3. Dodaj ugotowany makaron do sosu, mieszaj i podawaj z posiekaną bazylią.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'penne', 'quantity' => 200],
                    ['name' => 'masło', 'quantity' => 30],
                    ['name' => 'śmietana kremówka', 'quantity' => 100],
                    ['name' => 'ser', 'quantity' => 50],
                    ['name' => 'bazylia', 'quantity' => 5],
                ],
                'image_path' => 'recipes/penne-cheese-sauce.jpg',
            ],
            [                'name' => '6Pieczona Kaczka z Jabłkami',
                'description' => 'Soczysta pieczona kaczka z jabłkami i ziołami.',
                'instruction' => '1. Kaczkę natrzyj solą, pieprzem i ziołami.
                      2. Włóż do środka pokrojone jabłka.
                      3. Piecz w piekarniku przez 1,5 godziny w temperaturze 180°C.
                      4. Podawaj z pieczonymi jabłkami i sosie z pieczenia.',
                'diet' => null,
                'time' => RecipeTime::LONG,
                'ingredients' => [
                    ['name' => 'kaczka', 'quantity' => 1000],
                    ['name' => 'jabłko', 'quantity' => 2],
                    ['name' => 'sól', 'quantity' => 10],
                    ['name' => 'pieprz', 'quantity' => 5],
                    ['name' => 'rozmaryn', 'quantity' => 5],
                    ['name' => 'tymianek', 'quantity' => 5],
                ],
                'image_path' => 'recipes/roasted-duck-apples.jpg',
            ],
            [                'name' => '6Omlet z Serem i Szpinakiem',
                'description' => 'Puszysty omlet z serem, świeżym szpinakiem i cebulą.',
                'instruction' => '1. Roztrzep jajka w misce, dodaj posiekany szpinak i cebulę.
                      2. Na patelni rozgrzej masło i wlej masę jajeczną.
                      3. Posyp startym serem i smaż na małym ogniu do zastygnięcia.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'jajko', 'quantity' => 2],
                    ['name' => 'ser', 'quantity' => 30],
                    ['name' => 'szpinak', 'quantity' => 50],
                    ['name' => 'cebula', 'quantity' => 1],
                    ['name' => 'masło', 'quantity' => 10],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/spinach-cheese-omelette.jpg',
            ],
            [                'name' => '6Koktajl Truskawkowy z Bananem',
                'description' => 'Orzeźwiający koktajl z truskawkami, bananem i jogurtem.',
                'instruction' => '1. W blenderze połącz truskawki, banana, jogurt i miód.
                      2. Miksuj do uzyskania gładkiego koktajlu.
                      3. Podawaj schłodzone z plasterkiem pomarańczy.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'truskawka', 'quantity' => 20],
                    ['name' => 'banan', 'quantity' => 1],
                    ['name' => 'jogurt', 'quantity' => 150],
                    ['name' => 'miód', 'quantity' => 10],
                    ['name' => 'pomarańcza', 'quantity' => 1],
                ],
                'image_path' => 'recipes/strawberry-banana-smoothie.jpg',
            ],
            [                'name' => '6Sałatka Grecka',
                'description' => 'Klasyczna sałatka grecka z pomidorem, ogórkiem, oliwkami i fetą.',
                'instruction' => '1. Pokrój pomidory, ogórki i cebulę.
                      2. Dodaj oliwki i pokruszoną fetę.
                      3. Skrop oliwą z oliwek, dopraw solą i pieprzem.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'pomidor', 'quantity' => 2],
                    ['name' => 'ogórek', 'quantity' => 1],
                    ['name' => 'cebula', 'quantity' => 1],
                    ['name' => 'oliwki', 'quantity' => 30],
                    ['name' => 'ser feta', 'quantity' => 30],
                    ['name' => 'oliwa z oliwek', 'quantity' => 15],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/greek-salad.jpg',
            ],
            [                'name' => '6Kremowa Zupa Brokułowa',
                'description' => 'Delikatna zupa kremowa z soczystym brokułem i serem parmezan.',
                'instruction' => '1. Gotuj brokuły na parze do miękkości.
                      2. Rozblenduj je z gorącym mlekiem i serem parmezan.
                      3. Dopraw solą i pieprzem, podawaj z grzankami.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'brokuł', 'quantity' => 1],
                    ['name' => 'mleko', 'quantity' => 200],
                    ['name' => 'ser parmezan', 'quantity' => 30],
                    ['name' => 'grzanki', 'quantity' => 50],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/cream-of-broccoli-soup.jpg',
            ],
            [                'name' => '6Kotlety Schabowe',
                'description' => 'Tradycyjne kotlety schabowe smażone na maśle klarowanym.',
                'instruction' => '1. Rozbij kotlety schabowe, dopraw solą i pieprzem.
                      2. Obtocz w mące, jajku i bułce tartej.
                      3. Smaż na maśle klarowanym z obu stron do zarumienienia.',
                'diet' => null,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'kotlet schabowy', 'quantity' => 2],
                    ['name' => 'masło', 'quantity' => 30],
                    ['name' => 'mąka', 'quantity' => 30],
                    ['name' => 'jajko', 'quantity' => 1],
                    ['name' => 'bułka tarta', 'quantity' => 30],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/pork-cutlets.jpg',
            ],
            [                'name' => '6Sałatka z Komosą Ryżową',
                'description' => 'Zdrowa sałatka z komosą ryżową, pieczonymi warzywami i sosem jogurtowym.',
                'instruction' => '1. Ugotuj komosę ryżową według instrukcji na opakowaniu.
                      2. Piecz warzywa (np. batata, paprykę, cukinię) z odrobiną oliwy.
                      3. Połącz komosę ryżową, warzywa.
                      4. Skrop sosem jogurtowym i podawaj.',
                'diet' => RecipeDiet::VEGAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'komosa ryżowa', 'quantity' => 100],
                    ['name' => 'batat', 'quantity' => 1],
                    ['name' => 'papryka', 'quantity' => 1],
                    ['name' => 'cukinia', 'quantity' => 1],
                    ['name' => 'oliwa z oliwek', 'quantity' => 15],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                    ['name' => 'jogurt', 'quantity' => 30],
                ],
                'image_path' => 'recipes/quinoa-veggie-salad.jpg',
            ],
            [                'name' => '6Krem z Dyni',
                'description' => 'Delikatny krem z dyni z nutą cynamonu i orzechów.',
                'instruction' => '1. Upiecz kawałki dyni w piekarniku.
                      2. Rozblenduj dynię z ciepłym mlekiem roślinnym.
                      3. Dodaj cynamon, orzechy i sól. Podawaj gorący.',
                'diet' => RecipeDiet::VEGAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'dynia', 'quantity' => 200],
                    ['name' => 'mleko owsiane', 'quantity' => 200],
                    ['name' => 'cynamon', 'quantity' => 5],
                    ['name' => 'orzechy włoskie', 'quantity' => 10],
                    ['name' => 'sól', 'quantity' => 5],
                ],
                'image_path' => 'recipes/pumpkin-soup.jpg',
            ],
            [                'name' => '6Kasza Jaglana z Warzywami',
                'description' => 'Kasza jaglana z duszonymi warzywami i sosie pomidorowym.',
                'instruction' => '1. Ugotuj kaszę jaglaną zgodnie z instrukcją.
                      2. Podsmaż cebulę i czosnek, dodaj pokrojone warzywa (np. cukinię, paprykę).
                      3. Dodaj sos pomidorowy i dusz warzywa.
                      4. Podawaj z ugotowaną kaszą.',
                'diet' => RecipeDiet::VEGAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'kasza jaglana', 'quantity' => 100],
                    ['name' => 'cebula', 'quantity' => 1],
                    ['name' => 'czosnek', 'quantity' => 2],
                    ['name' => 'cukinia', 'quantity' => 1],
                    ['name' => 'papryka', 'quantity' => 1],
                    ['name' => 'pomidor', 'quantity' => 2],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/buckwheat-vegetable-stir-fry.jpg',
            ],
            [                'name' => '6XYZ Kasza Jaglana z Warzywami',
                'description' => 'Kasza jaglana z duszonymi warzywami i sosie pomidorowym.',
                'instruction' => '1. Ugotuj kaszę jaglaną zgodnie z instrukcją.
                      2. Podsmaż cebulę i czosnek, dodaj pokrojone warzywa (np. cukinię, paprykę).
                      3. Dodaj sos pomidorowy i dusz warzywa.
                      4. Podawaj z ugotowaną kaszą.',
                'diet' => RecipeDiet::VEGAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'kasza jaglana', 'quantity' => 100],
                    ['name' => 'cebula', 'quantity' => 1],
                    ['name' => 'czosnek', 'quantity' => 2],
                    ['name' => 'cukinia', 'quantity' => 1],
                    ['name' => 'papryka', 'quantity' => 1],
                    ['name' => 'pomidor', 'quantity' => 2],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/buckwheat-vegetable-stir-fry.jpg',
            ],
            [                'name' => '6XYZ Kremowy Kurczak z Pieczarkami',
                'description' => 'Delikatne kawałki kurczaka w kremowym sosie z pieczarkami.',
                'instruction' => '1. Na patelni rozgrzej olej i zrumień kawałki kurczaka.
                      2. Dodaj posiekane pieczarki i smaż do zmiękczenia.
                      3. Wlej śmietankę i gotuj na małym ogniu przez 10 minut.
                      4. Dopraw solą, pieprzem i posyp posiekanym koperkiem.',
                'diet' => null,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'pierś z kurczaka', 'quantity' => 300],
                    ['name' => 'olej roślinny', 'quantity' => 30],
                    ['name' => 'pieczarki', 'quantity' => 200],
                    ['name' => 'śmietanka do kawy', 'quantity' => 200],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                    ['name' => 'koperek', 'quantity' => 10],
                ],
                'image_path' => 'recipes/creamy-chicken-mushrooms.jpg',
            ],
            [                'name' => '6XYZ Sałatka z Grilowanym Łososiem',
                'description' => 'Klasyczna sałatka Cezar z dodatkiem soczystego grilowanego łososia.',
                'instruction' => '1. Griluj filet łososia przez 4 minuty z każdej strony.
                      2. Na talerzu ułóż sałatę, pokrojonego łososia, posyp parmezanem.
                      3. Polej sosem Cezar i udekoruj kawałkami grzanki.',
                'diet' => null,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'filet z łososia', 'quantity' => 150],
                    ['name' => 'ser parmezan', 'quantity' => 30],
                    ['name' => 'sałata', 'quantity' => 100],
                    ['name' => 'grzanki', 'quantity' => 50],
                ],
                'image_path' => 'recipes/caesar-salad-salmon.jpg',
            ],
            [                'name' => '6XYZ Wegetariańskie Curry z Batatem',
                'description' => 'Pikantne wegetariańskie curry z batatem, ciecierzycą i szpinakiem.',
                'instruction' => '1. W garnku podsmaż czosnek i cebulę na oleju.
                      2. Dodaj pokrojonego w kostkę batata, ciecierzycę i przyprawy curry.
                      3. Wlej mleko kokosowe i gotuj do miękkości batata.
                      4. Na końcu dodaj szpinak i gotuj jeszcze 3 minuty.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::LONG,
                'ingredients' => [
                    ['name' => 'batat', 'quantity' => 200],
                    ['name' => 'ciecierzyca', 'quantity' => 150],
                    ['name' => 'szpinak', 'quantity' => 100],
                    ['name' => 'mleko', 'quantity' => 200],
                    ['name' => 'olej roślinny', 'quantity' => 30],
                    ['name' => 'czosnek', 'quantity' => 10],
                ],
                'image_path' => 'recipes/vegetarian-curry-sweet-potato.jpg',
            ],
            [                'name' => '6XYZ Makaron Penne z Sosem Serowym',
                'description' => 'Kremowy makaron penne w bogatym sosie serowym.',
                'instruction' => '1. Ugotuj makaron penne al dente.
                      2. Na patelni rozpuść masło, dodaj śmietanę i ser, mieszając do uzyskania gładkiego sosu.
                      3. Dodaj ugotowany makaron do sosu, mieszaj i podawaj z posiekaną bazylią.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'penne', 'quantity' => 200],
                    ['name' => 'masło', 'quantity' => 30],
                    ['name' => 'śmietana kremówka', 'quantity' => 100],
                    ['name' => 'ser', 'quantity' => 50],
                    ['name' => 'bazylia', 'quantity' => 5],
                ],
                'image_path' => 'recipes/penne-cheese-sauce.jpg',
            ],
            [                'name' => '6XYZ Pieczona Kaczka z Jabłkami',
                'description' => 'Soczysta pieczona kaczka z jabłkami i ziołami.',
                'instruction' => '1. Kaczkę natrzyj solą, pieprzem i ziołami.
                      2. Włóż do środka pokrojone jabłka.
                      3. Piecz w piekarniku przez 1,5 godziny w temperaturze 180°C.
                      4. Podawaj z pieczonymi jabłkami i sosie z pieczenia.',
                'diet' => null,
                'time' => RecipeTime::LONG,
                'ingredients' => [
                    ['name' => 'kaczka', 'quantity' => 1000],
                    ['name' => 'jabłko', 'quantity' => 2],
                    ['name' => 'sól', 'quantity' => 10],
                    ['name' => 'pieprz', 'quantity' => 5],
                    ['name' => 'rozmaryn', 'quantity' => 5],
                    ['name' => 'tymianek', 'quantity' => 5],
                ],
                'image_path' => 'recipes/roasted-duck-apples.jpg',
            ],
            [                'name' => '6XYZ Omlet z Serem i Szpinakiem',
                'description' => 'Puszysty omlet z serem, świeżym szpinakiem i cebulą.',
                'instruction' => '1. Roztrzep jajka w misce, dodaj posiekany szpinak i cebulę.
                      2. Na patelni rozgrzej masło i wlej masę jajeczną.
                      3. Posyp startym serem i smaż na małym ogniu do zastygnięcia.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'jajko', 'quantity' => 2],
                    ['name' => 'ser', 'quantity' => 30],
                    ['name' => 'szpinak', 'quantity' => 50],
                    ['name' => 'cebula', 'quantity' => 1],
                    ['name' => 'masło', 'quantity' => 10],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/spinach-cheese-omelette.jpg',
            ],
            [                'name' => '6XYZ Koktajl Truskawkowy z Bananem',
                'description' => 'Orzeźwiający koktajl z truskawkami, bananem i jogurtem.',
                'instruction' => '1. W blenderze połącz truskawki, banana, jogurt i miód.
                      2. Miksuj do uzyskania gładkiego koktajlu.
                      3. Podawaj schłodzone z plasterkiem pomarańczy.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'truskawka', 'quantity' => 20],
                    ['name' => 'banan', 'quantity' => 1],
                    ['name' => 'jogurt', 'quantity' => 150],
                    ['name' => 'miód', 'quantity' => 10],
                    ['name' => 'pomarańcza', 'quantity' => 1],
                ],
                'image_path' => 'recipes/strawberry-banana-smoothie.jpg',
            ],
            [                'name' => '6XYZ Sałatka Grecka',
                'description' => 'Klasyczna sałatka grecka z pomidorem, ogórkiem, oliwkami i fetą.',
                'instruction' => '1. Pokrój pomidory, ogórki i cebulę.
                      2. Dodaj oliwki i pokruszoną fetę.
                      3. Skrop oliwą z oliwek, dopraw solą i pieprzem.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'pomidor', 'quantity' => 2],
                    ['name' => 'ogórek', 'quantity' => 1],
                    ['name' => 'cebula', 'quantity' => 1],
                    ['name' => 'oliwki', 'quantity' => 30],
                    ['name' => 'ser feta', 'quantity' => 30],
                    ['name' => 'oliwa z oliwek', 'quantity' => 15],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/greek-salad.jpg',
            ],
            [                'name' => '6XYZ Kremowa Zupa Brokułowa',
                'description' => 'Delikatna zupa kremowa z soczystym brokułem i serem parmezan.',
                'instruction' => '1. Gotuj brokuły na parze do miękkości.
                      2. Rozblenduj je z gorącym mlekiem i serem parmezan.
                      3. Dopraw solą i pieprzem, podawaj z grzankami.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'brokuł', 'quantity' => 1],
                    ['name' => 'mleko', 'quantity' => 200],
                    ['name' => 'ser parmezan', 'quantity' => 30],
                    ['name' => 'grzanki', 'quantity' => 50],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/cream-of-broccoli-soup.jpg',
            ],
            [                'name' => '6XYZ Kotlety Schabowe',
                'description' => 'Tradycyjne kotlety schabowe smażone na maśle klarowanym.',
                'instruction' => '1. Rozbij kotlety schabowe, dopraw solą i pieprzem.
                      2. Obtocz w mące, jajku i bułce tartej.
                      3. Smaż na maśle klarowanym z obu stron do zarumienienia.',
                'diet' => null,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'kotlet schabowy', 'quantity' => 2],
                    ['name' => 'masło', 'quantity' => 30],
                    ['name' => 'mąka', 'quantity' => 30],
                    ['name' => 'jajko', 'quantity' => 1],
                    ['name' => 'bułka tarta', 'quantity' => 30],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/pork-cutlets.jpg',
            ],
            [                'name' => '6XYZ Sałatka z Komosą Ryżową',
                'description' => 'Zdrowa sałatka z komosą ryżową, pieczonymi warzywami i sosem jogurtowym.',
                'instruction' => '1. Ugotuj komosę ryżową według instrukcji na opakowaniu.
                      2. Piecz warzywa (np. batata, paprykę, cukinię) z odrobiną oliwy.
                      3. Połącz komosę ryżową, warzywa.
                      4. Skrop sosem jogurtowym i podawaj.',
                'diet' => RecipeDiet::VEGAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'komosa ryżowa', 'quantity' => 100],
                    ['name' => 'batat', 'quantity' => 1],
                    ['name' => 'papryka', 'quantity' => 1],
                    ['name' => 'cukinia', 'quantity' => 1],
                    ['name' => 'oliwa z oliwek', 'quantity' => 15],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                    ['name' => 'jogurt', 'quantity' => 30],
                ],
                'image_path' => 'recipes/quinoa-veggie-salad.jpg',
            ],
            [                'name' => '6XYZ Krem z Dyni',
                'description' => 'Delikatny krem z dyni z nutą cynamonu i orzechów.',
                'instruction' => '1. Upiecz kawałki dyni w piekarniku.
                      2. Rozblenduj dynię z ciepłym mlekiem roślinnym.
                      3. Dodaj cynamon, orzechy i sól. Podawaj gorący.',
                'diet' => RecipeDiet::VEGAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'dynia', 'quantity' => 200],
                    ['name' => 'mleko owsiane', 'quantity' => 200],
                    ['name' => 'cynamon', 'quantity' => 5],
                    ['name' => 'orzechy włoskie', 'quantity' => 10],
                    ['name' => 'sól', 'quantity' => 5],
                ],
                'image_path' => 'recipes/pumpkin-soup.jpg',
            ],
            [                'name' => '6ABC1 Kasza Jaglana z Warzywami',
                'description' => 'Kasza jaglana z duszonymi warzywami i sosie pomidorowym.',
                'instruction' => '1. Ugotuj kaszę jaglaną zgodnie z instrukcją.
                      2. Podsmaż cebulę i czosnek, dodaj pokrojone warzywa (np. cukinię, paprykę).
                      3. Dodaj sos pomidorowy i dusz warzywa.
                      4. Podawaj z ugotowaną kaszą.',
                'diet' => RecipeDiet::VEGAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'kasza jaglana', 'quantity' => 100],
                    ['name' => 'cebula', 'quantity' => 1],
                    ['name' => 'czosnek', 'quantity' => 2],
                    ['name' => 'cukinia', 'quantity' => 1],
                    ['name' => 'papryka', 'quantity' => 1],
                    ['name' => 'pomidor', 'quantity' => 2],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/buckwheat-vegetable-stir-fry.jpg',
            ],
            [                'name' => '6ABC1 Kremowy Kurczak z Pieczarkami',
                'description' => 'Delikatne kawałki kurczaka w kremowym sosie z pieczarkami.',
                'instruction' => '1. Na patelni rozgrzej olej i zrumień kawałki kurczaka.
                      2. Dodaj posiekane pieczarki i smaż do zmiękczenia.
                      3. Wlej śmietankę i gotuj na małym ogniu przez 10 minut.
                      4. Dopraw solą, pieprzem i posyp posiekanym koperkiem.',
                'diet' => null,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'pierś z kurczaka', 'quantity' => 300],
                    ['name' => 'olej roślinny', 'quantity' => 30],
                    ['name' => 'pieczarki', 'quantity' => 200],
                    ['name' => 'śmietanka do kawy', 'quantity' => 200],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                    ['name' => 'koperek', 'quantity' => 10],
                ],
                'image_path' => 'recipes/creamy-chicken-mushrooms.jpg',
            ],
            [                'name' => '6ABC1 Sałatka z Grilowanym Łososiem',
                'description' => 'Klasyczna sałatka Cezar z dodatkiem soczystego grilowanego łososia.',
                'instruction' => '1. Griluj filet łososia przez 4 minuty z każdej strony.
                      2. Na talerzu ułóż sałatę, pokrojonego łososia, posyp parmezanem.
                      3. Polej sosem Cezar i udekoruj kawałkami grzanki.',
                'diet' => null,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'filet z łososia', 'quantity' => 150],
                    ['name' => 'ser parmezan', 'quantity' => 30],
                    ['name' => 'sałata', 'quantity' => 100],
                    ['name' => 'grzanki', 'quantity' => 50],
                ],
                'image_path' => 'recipes/caesar-salad-salmon.jpg',
            ],
            [                'name' => '6ABC1 Wegetariańskie Curry z Batatem',
                'description' => 'Pikantne wegetariańskie curry z batatem, ciecierzycą i szpinakiem.',
                'instruction' => '1. W garnku podsmaż czosnek i cebulę na oleju.
                      2. Dodaj pokrojonego w kostkę batata, ciecierzycę i przyprawy curry.
                      3. Wlej mleko kokosowe i gotuj do miękkości batata.
                      4. Na końcu dodaj szpinak i gotuj jeszcze 3 minuty.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::LONG,
                'ingredients' => [
                    ['name' => 'batat', 'quantity' => 200],
                    ['name' => 'ciecierzyca', 'quantity' => 150],
                    ['name' => 'szpinak', 'quantity' => 100],
                    ['name' => 'mleko', 'quantity' => 200],
                    ['name' => 'olej roślinny', 'quantity' => 30],
                    ['name' => 'czosnek', 'quantity' => 10],
                ],
                'image_path' => 'recipes/vegetarian-curry-sweet-potato.jpg',
            ],
            [                'name' => '6ABC1 Makaron Penne z Sosem Serowym',
                'description' => 'Kremowy makaron penne w bogatym sosie serowym.',
                'instruction' => '1. Ugotuj makaron penne al dente.
                      2. Na patelni rozpuść masło, dodaj śmietanę i ser, mieszając do uzyskania gładkiego sosu.
                      3. Dodaj ugotowany makaron do sosu, mieszaj i podawaj z posiekaną bazylią.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'penne', 'quantity' => 200],
                    ['name' => 'masło', 'quantity' => 30],
                    ['name' => 'śmietana kremówka', 'quantity' => 100],
                    ['name' => 'ser', 'quantity' => 50],
                    ['name' => 'bazylia', 'quantity' => 5],
                ],
                'image_path' => 'recipes/penne-cheese-sauce.jpg',
            ],
            [                'name' => '6ABC1 Pieczona Kaczka z Jabłkami',
                'description' => 'Soczysta pieczona kaczka z jabłkami i ziołami.',
                'instruction' => '1. Kaczkę natrzyj solą, pieprzem i ziołami.
                      2. Włóż do środka pokrojone jabłka.
                      3. Piecz w piekarniku przez 1,5 godziny w temperaturze 180°C.
                      4. Podawaj z pieczonymi jabłkami i sosie z pieczenia.',
                'diet' => null,
                'time' => RecipeTime::LONG,
                'ingredients' => [
                    ['name' => 'kaczka', 'quantity' => 1000],
                    ['name' => 'jabłko', 'quantity' => 2],
                    ['name' => 'sól', 'quantity' => 10],
                    ['name' => 'pieprz', 'quantity' => 5],
                    ['name' => 'rozmaryn', 'quantity' => 5],
                    ['name' => 'tymianek', 'quantity' => 5],
                ],
                'image_path' => 'recipes/roasted-duck-apples.jpg',
            ],
            [                'name' => '6ABC1 Omlet z Serem i Szpinakiem',
                'description' => 'Puszysty omlet z serem, świeżym szpinakiem i cebulą.',
                'instruction' => '1. Roztrzep jajka w misce, dodaj posiekany szpinak i cebulę.
                      2. Na patelni rozgrzej masło i wlej masę jajeczną.
                      3. Posyp startym serem i smaż na małym ogniu do zastygnięcia.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'jajko', 'quantity' => 2],
                    ['name' => 'ser', 'quantity' => 30],
                    ['name' => 'szpinak', 'quantity' => 50],
                    ['name' => 'cebula', 'quantity' => 1],
                    ['name' => 'masło', 'quantity' => 10],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/spinach-cheese-omelette.jpg',
            ],
            [                'name' => '6ABC1 Koktajl Truskawkowy z Bananem',
                'description' => 'Orzeźwiający koktajl z truskawkami, bananem i jogurtem.',
                'instruction' => '1. W blenderze połącz truskawki, banana, jogurt i miód.
                      2. Miksuj do uzyskania gładkiego koktajlu.
                      3. Podawaj schłodzone z plasterkiem pomarańczy.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'truskawka', 'quantity' => 20],
                    ['name' => 'banan', 'quantity' => 1],
                    ['name' => 'jogurt', 'quantity' => 150],
                    ['name' => 'miód', 'quantity' => 10],
                    ['name' => 'pomarańcza', 'quantity' => 1],
                ],
                'image_path' => 'recipes/strawberry-banana-smoothie.jpg',
            ],
            [                'name' => '6ABC1 Sałatka Grecka',
                'description' => 'Klasyczna sałatka grecka z pomidorem, ogórkiem, oliwkami i fetą.',
                'instruction' => '1. Pokrój pomidory, ogórki i cebulę.
                      2. Dodaj oliwki i pokruszoną fetę.
                      3. Skrop oliwą z oliwek, dopraw solą i pieprzem.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'pomidor', 'quantity' => 2],
                    ['name' => 'ogórek', 'quantity' => 1],
                    ['name' => 'cebula', 'quantity' => 1],
                    ['name' => 'oliwki', 'quantity' => 30],
                    ['name' => 'ser feta', 'quantity' => 30],
                    ['name' => 'oliwa z oliwek', 'quantity' => 15],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/greek-salad.jpg',
            ],
            [                'name' => '6ABC1 Kremowa Zupa Brokułowa',
                'description' => 'Delikatna zupa kremowa z soczystym brokułem i serem parmezan.',
                'instruction' => '1. Gotuj brokuły na parze do miękkości.
                      2. Rozblenduj je z gorącym mlekiem i serem parmezan.
                      3. Dopraw solą i pieprzem, podawaj z grzankami.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'brokuł', 'quantity' => 1],
                    ['name' => 'mleko', 'quantity' => 200],
                    ['name' => 'ser parmezan', 'quantity' => 30],
                    ['name' => 'grzanki', 'quantity' => 50],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/cream-of-broccoli-soup.jpg',
            ],
            [                'name' => '6ABC1 Kotlety Schabowe',
                'description' => 'Tradycyjne kotlety schabowe smażone na maśle klarowanym.',
                'instruction' => '1. Rozbij kotlety schabowe, dopraw solą i pieprzem.
                      2. Obtocz w mące, jajku i bułce tartej.
                      3. Smaż na maśle klarowanym z obu stron do zarumienienia.',
                'diet' => null,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'kotlet schabowy', 'quantity' => 2],
                    ['name' => 'masło', 'quantity' => 30],
                    ['name' => 'mąka', 'quantity' => 30],
                    ['name' => 'jajko', 'quantity' => 1],
                    ['name' => 'bułka tarta', 'quantity' => 30],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/pork-cutlets.jpg',
            ],
            [                'name' => '6ABC1 Sałatka z Komosą Ryżową',
                'description' => 'Zdrowa sałatka z komosą ryżową, pieczonymi warzywami i sosem jogurtowym.',
                'instruction' => '1. Ugotuj komosę ryżową według instrukcji na opakowaniu.
                      2. Piecz warzywa (np. batata, paprykę, cukinię) z odrobiną oliwy.
                      3. Połącz komosę ryżową, warzywa.
                      4. Skrop sosem jogurtowym i podawaj.',
                'diet' => RecipeDiet::VEGAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'komosa ryżowa', 'quantity' => 100],
                    ['name' => 'batat', 'quantity' => 1],
                    ['name' => 'papryka', 'quantity' => 1],
                    ['name' => 'cukinia', 'quantity' => 1],
                    ['name' => 'oliwa z oliwek', 'quantity' => 15],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                    ['name' => 'jogurt', 'quantity' => 30],
                ],
                'image_path' => 'recipes/quinoa-veggie-salad.jpg',
            ],
            [                'name' => '6ABC1 Krem z Dyni',
                'description' => 'Delikatny krem z dyni z nutą cynamonu i orzechów.',
                'instruction' => '1. Upiecz kawałki dyni w piekarniku.
                      2. Rozblenduj dynię z ciepłym mlekiem roślinnym.
                      3. Dodaj cynamon, orzechy i sól. Podawaj gorący.',
                'diet' => RecipeDiet::VEGAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'dynia', 'quantity' => 200],
                    ['name' => 'mleko owsiane', 'quantity' => 200],
                    ['name' => 'cynamon', 'quantity' => 5],
                    ['name' => 'orzechy włoskie', 'quantity' => 10],
                    ['name' => 'sól', 'quantity' => 5],
                ],
                'image_path' => 'recipes/pumpkin-soup.jpg',
            ],
            [                'name' => '6ABC2 Kasza Jaglana z Warzywami',
                'description' => 'Kasza jaglana z duszonymi warzywami i sosie pomidorowym.',
                'instruction' => '1. Ugotuj kaszę jaglaną zgodnie z instrukcją.
                      2. Podsmaż cebulę i czosnek, dodaj pokrojone warzywa (np. cukinię, paprykę).
                      3. Dodaj sos pomidorowy i dusz warzywa.
                      4. Podawaj z ugotowaną kaszą.',
                'diet' => RecipeDiet::VEGAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'kasza jaglana', 'quantity' => 100],
                    ['name' => 'cebula', 'quantity' => 1],
                    ['name' => 'czosnek', 'quantity' => 2],
                    ['name' => 'cukinia', 'quantity' => 1],
                    ['name' => 'papryka', 'quantity' => 1],
                    ['name' => 'pomidor', 'quantity' => 2],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/buckwheat-vegetable-stir-fry.jpg',
            ],
            [                'name' => '6ABC2 Kremowy Kurczak z Pieczarkami',
                'description' => 'Delikatne kawałki kurczaka w kremowym sosie z pieczarkami.',
                'instruction' => '1. Na patelni rozgrzej olej i zrumień kawałki kurczaka.
                      2. Dodaj posiekane pieczarki i smaż do zmiękczenia.
                      3. Wlej śmietankę i gotuj na małym ogniu przez 10 minut.
                      4. Dopraw solą, pieprzem i posyp posiekanym koperkiem.',
                'diet' => null,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'pierś z kurczaka', 'quantity' => 300],
                    ['name' => 'olej roślinny', 'quantity' => 30],
                    ['name' => 'pieczarki', 'quantity' => 200],
                    ['name' => 'śmietanka do kawy', 'quantity' => 200],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                    ['name' => 'koperek', 'quantity' => 10],
                ],
                'image_path' => 'recipes/creamy-chicken-mushrooms.jpg',
            ],
            [                'name' => '6ABC2 Sałatka z Grilowanym Łososiem',
                'description' => 'Klasyczna sałatka Cezar z dodatkiem soczystego grilowanego łososia.',
                'instruction' => '1. Griluj filet łososia przez 4 minuty z każdej strony.
                      2. Na talerzu ułóż sałatę, pokrojonego łososia, posyp parmezanem.
                      3. Polej sosem Cezar i udekoruj kawałkami grzanki.',
                'diet' => null,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'filet z łososia', 'quantity' => 150],
                    ['name' => 'ser parmezan', 'quantity' => 30],
                    ['name' => 'sałata', 'quantity' => 100],
                    ['name' => 'grzanki', 'quantity' => 50],
                ],
                'image_path' => 'recipes/caesar-salad-salmon.jpg',
            ],
            [                'name' => '6ABC2 Wegetariańskie Curry z Batatem',
                'description' => 'Pikantne wegetariańskie curry z batatem, ciecierzycą i szpinakiem.',
                'instruction' => '1. W garnku podsmaż czosnek i cebulę na oleju.
                      2. Dodaj pokrojonego w kostkę batata, ciecierzycę i przyprawy curry.
                      3. Wlej mleko kokosowe i gotuj do miękkości batata.
                      4. Na końcu dodaj szpinak i gotuj jeszcze 3 minuty.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::LONG,
                'ingredients' => [
                    ['name' => 'batat', 'quantity' => 200],
                    ['name' => 'ciecierzyca', 'quantity' => 150],
                    ['name' => 'szpinak', 'quantity' => 100],
                    ['name' => 'mleko', 'quantity' => 200],
                    ['name' => 'olej roślinny', 'quantity' => 30],
                    ['name' => 'czosnek', 'quantity' => 10],
                ],
                'image_path' => 'recipes/vegetarian-curry-sweet-potato.jpg',
            ],
            [                'name' => '6ABC2 Makaron Penne z Sosem Serowym',
                'description' => 'Kremowy makaron penne w bogatym sosie serowym.',
                'instruction' => '1. Ugotuj makaron penne al dente.
                      2. Na patelni rozpuść masło, dodaj śmietanę i ser, mieszając do uzyskania gładkiego sosu.
                      3. Dodaj ugotowany makaron do sosu, mieszaj i podawaj z posiekaną bazylią.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'penne', 'quantity' => 200],
                    ['name' => 'masło', 'quantity' => 30],
                    ['name' => 'śmietana kremówka', 'quantity' => 100],
                    ['name' => 'ser', 'quantity' => 50],
                    ['name' => 'bazylia', 'quantity' => 5],
                ],
                'image_path' => 'recipes/penne-cheese-sauce.jpg',
            ],
            [                'name' => '6ABC2 Pieczona Kaczka z Jabłkami',
                'description' => 'Soczysta pieczona kaczka z jabłkami i ziołami.',
                'instruction' => '1. Kaczkę natrzyj solą, pieprzem i ziołami.
                      2. Włóż do środka pokrojone jabłka.
                      3. Piecz w piekarniku przez 1,5 godziny w temperaturze 180°C.
                      4. Podawaj z pieczonymi jabłkami i sosie z pieczenia.',
                'diet' => null,
                'time' => RecipeTime::LONG,
                'ingredients' => [
                    ['name' => 'kaczka', 'quantity' => 1000],
                    ['name' => 'jabłko', 'quantity' => 2],
                    ['name' => 'sól', 'quantity' => 10],
                    ['name' => 'pieprz', 'quantity' => 5],
                    ['name' => 'rozmaryn', 'quantity' => 5],
                    ['name' => 'tymianek', 'quantity' => 5],
                ],
                'image_path' => 'recipes/roasted-duck-apples.jpg',
            ],
            [                'name' => '6ABC2 Omlet z Serem i Szpinakiem',
                'description' => 'Puszysty omlet z serem, świeżym szpinakiem i cebulą.',
                'instruction' => '1. Roztrzep jajka w misce, dodaj posiekany szpinak i cebulę.
                      2. Na patelni rozgrzej masło i wlej masę jajeczną.
                      3. Posyp startym serem i smaż na małym ogniu do zastygnięcia.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'jajko', 'quantity' => 2],
                    ['name' => 'ser', 'quantity' => 30],
                    ['name' => 'szpinak', 'quantity' => 50],
                    ['name' => 'cebula', 'quantity' => 1],
                    ['name' => 'masło', 'quantity' => 10],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/spinach-cheese-omelette.jpg',
            ],
            [                'name' => '6ABC2 Koktajl Truskawkowy z Bananem',
                'description' => 'Orzeźwiający koktajl z truskawkami, bananem i jogurtem.',
                'instruction' => '1. W blenderze połącz truskawki, banana, jogurt i miód.
                      2. Miksuj do uzyskania gładkiego koktajlu.
                      3. Podawaj schłodzone z plasterkiem pomarańczy.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'truskawka', 'quantity' => 20],
                    ['name' => 'banan', 'quantity' => 1],
                    ['name' => 'jogurt', 'quantity' => 150],
                    ['name' => 'miód', 'quantity' => 10],
                    ['name' => 'pomarańcza', 'quantity' => 1],
                ],
                'image_path' => 'recipes/strawberry-banana-smoothie.jpg',
            ],
            [                'name' => '6ABC2 Sałatka Grecka',
                'description' => 'Klasyczna sałatka grecka z pomidorem, ogórkiem, oliwkami i fetą.',
                'instruction' => '1. Pokrój pomidory, ogórki i cebulę.
                      2. Dodaj oliwki i pokruszoną fetę.
                      3. Skrop oliwą z oliwek, dopraw solą i pieprzem.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::QUICK,
                'ingredients' => [
                    ['name' => 'pomidor', 'quantity' => 2],
                    ['name' => 'ogórek', 'quantity' => 1],
                    ['name' => 'cebula', 'quantity' => 1],
                    ['name' => 'oliwki', 'quantity' => 30],
                    ['name' => 'ser feta', 'quantity' => 30],
                    ['name' => 'oliwa z oliwek', 'quantity' => 15],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/greek-salad.jpg',
            ],
            [                'name' => '6ABC2 Kremowa Zupa Brokułowa',
                'description' => 'Delikatna zupa kremowa z soczystym brokułem i serem parmezan.',
                'instruction' => '1. Gotuj brokuły na parze do miękkości.
                      2. Rozblenduj je z gorącym mlekiem i serem parmezan.
                      3. Dopraw solą i pieprzem, podawaj z grzankami.',
                'diet' => RecipeDiet::VEGETARIAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'brokuł', 'quantity' => 1],
                    ['name' => 'mleko', 'quantity' => 200],
                    ['name' => 'ser parmezan', 'quantity' => 30],
                    ['name' => 'grzanki', 'quantity' => 50],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/cream-of-broccoli-soup.jpg',
            ],
            [                'name' => '6ABC2 Kotlety Schabowe',
                'description' => 'Tradycyjne kotlety schabowe smażone na maśle klarowanym.',
                'instruction' => '1. Rozbij kotlety schabowe, dopraw solą i pieprzem.
                      2. Obtocz w mące, jajku i bułce tartej.
                      3. Smaż na maśle klarowanym z obu stron do zarumienienia.',
                'diet' => null,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'kotlet schabowy', 'quantity' => 2],
                    ['name' => 'masło', 'quantity' => 30],
                    ['name' => 'mąka', 'quantity' => 30],
                    ['name' => 'jajko', 'quantity' => 1],
                    ['name' => 'bułka tarta', 'quantity' => 30],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                ],
                'image_path' => 'recipes/pork-cutlets.jpg',
            ],
            [                'name' => '6ABC2 Sałatka z Komosą Ryżową',
                'description' => 'Zdrowa sałatka z komosą ryżową, pieczonymi warzywami i sosem jogurtowym.',
                'instruction' => '1. Ugotuj komosę ryżową według instrukcji na opakowaniu.
                      2. Piecz warzywa (np. batata, paprykę, cukinię) z odrobiną oliwy.
                      3. Połącz komosę ryżową, warzywa.
                      4. Skrop sosem jogurtowym i podawaj.',
                'diet' => RecipeDiet::VEGAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'komosa ryżowa', 'quantity' => 100],
                    ['name' => 'batat', 'quantity' => 1],
                    ['name' => 'papryka', 'quantity' => 1],
                    ['name' => 'cukinia', 'quantity' => 1],
                    ['name' => 'oliwa z oliwek', 'quantity' => 15],
                    ['name' => 'sól', 'quantity' => 5],
                    ['name' => 'pieprz', 'quantity' => 5],
                    ['name' => 'jogurt', 'quantity' => 30],
                ],
                'image_path' => 'recipes/quinoa-veggie-salad.jpg',
            ],
            [                'name' => '6ABC2 Krem z Dyni',
                'description' => 'Delikatny krem z dyni z nutą cynamonu i orzechów.',
                'instruction' => '1. Upiecz kawałki dyni w piekarniku.
                      2. Rozblenduj dynię z ciepłym mlekiem roślinnym.
                      3. Dodaj cynamon, orzechy i sól. Podawaj gorący.',
                'diet' => RecipeDiet::VEGAN,
                'time' => RecipeTime::MEDIUM,
                'ingredients' => [
                    ['name' => 'dynia', 'quantity' => 200],
                    ['name' => 'mleko owsiane', 'quantity' => 200],
                    ['name' => 'cynamon', 'quantity' => 5],
                    ['name' => 'orzechy włoskie', 'quantity' => 10],
                    ['name' => 'sól', 'quantity' => 5],
                ],
                'image_path' => 'recipes/pumpkin-soup.jpg',
            ],
        ];

        foreach ($recipes as $recipeData) {
            $recipeName = $recipeData['name'];

            // Check if the recipe already exists
            if (!DB::table('recipes')->where('name', $recipeName)->exists()) {
                $recipeId = DB::table('recipes')->insertGetId([
                    'name' => $recipeName,
                    'description' => $recipeData['description'],
                    'instruction' => $recipeData['instruction'],
                    'diet' => $recipeData['diet'],
                    'time' => $recipeData['time'],
                    'image_path' => $recipeData['image_path'],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);

                foreach ($recipeData['ingredients'] as $ingredient) {
                    $ingredientId = DB::table('ingredients')
                        ->where('name', $ingredient['name'])
                        ->value('id');

                    DB::table('recipes_ingredients')->insert([
                        'recipes_id' => $recipeId,
                        'ingredients_id' => $ingredientId,
                        'quantity' => $ingredient['quantity'],
                    ]);
                }
            }
        }
    }
//        $recipes = [
//            [
//                'name' => 'Scrambled eggs',
//                'description' => 'Delicious scrambled eggs from two eggs',
//                'instruction' => '1. Break two eggs into a bowl.
//                              2. Beat the eggs with a fork.
//                              3. Heat a frying pan and add a little butter.
//                              4. Pour the beaten eggs into the pan.
//                              5. Gently stir the eggs in the pan until they are set.
//                              6. Season with salt and pepper.
//                              7. Serve immediately!',
//                'diet' => RecipeDiet::VEGETARIAN,
//                'time' => RecipeTime::QUICK,
//                'created_at' => now(),
//                'updated_at' => now(),
//                'ingredients' => [
//                    ['name' => 'egg', 'quantity' => 2],
//                    ['name' => 'butter', 'quantity' => 10],
//                    ['name' => 'salt', 'quantity' => 1],
//                    ['name' => 'pepper', 'quantity' => 1],
//                ],
//            ],
//        ];
//
//        foreach ($recipes as $recipeData) {
//            $recipeName = $recipeData['name'];
//
//            // Check if the recipe already exists
//            if (!DB::table('recipes')->where('name', $recipeName)->exists()) {
//                $recipeId = DB::table('recipes')->insertGetId($recipeData);
//
//                foreach ($recipeData['ingredients'] as $ingredient) {
//                    $ingredientId = DB::table('ingredients')
//                        ->where('name', $ingredient['name'])
//                        ->value('id');
//
//                    DB::table('recipes_ingredients')->insert([
//                        'recipes_id' => $recipeId,
//                        'ingredients_id' => $ingredientId,
//                        'quantity' => $ingredient['quantity'],
//                    ]);
//                }
//            }
//        }
//    }
//        $recipeId = DB::table('recipes')->insertGetId([
//            'name' => 'Scrambled eggs',
//            'description' => 'Delicious scrambled eggs from two eggs',
//            'instruction' => '1. Break two eggs into a bowl.
//                              2. beat the eggs with a fork.
//                              3. Heat a frying pan and add a little butter.
//                              4. Pour the beaten eggs into the pan.
//                              5. Gently stir the eggs in the pan until they are set.
//                              6. Season with salt and pepper.
//                              7. Serve immediately!',
//            'diet' => RecipeDiet::VEGETARIAN,
//            'time' => RecipeTime::QUICK,
//            'created_at' => now(),
//            'updated_at' => now(),
//        ]);
//
//        // Ingredients for the recipe
//        $ingredients = [
//            ['name' => 'egg', 'quantity' => 2],
//            ['name' => 'butter', 'quantity' => 10],
//            ['name' => 'salt', 'quantity' => 1],
//            ['name' => 'pepper', 'quantity' => 1],
//        ];
//
//        foreach ($ingredients as $ingredient) {
//            $ingredientId = DB::table('ingredients')
//                ->where('name', $ingredient['name'])
//                ->value('id');
//
//            DB::table('recipes_ingredients')->insert([
//                'recipes_id' => $recipeId,
//                'ingredients_id' => $ingredientId,
//                'quantity' => $ingredient['quantity'],
//            ]);
//        }
//    }
}
