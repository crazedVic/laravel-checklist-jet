<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChecklistsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('checklists')->insert([
            'id' => 1,
            'author_id' => 1,
            'name' => "Due Diligence Checklist",
            'description' => 'Track due diligence requirements for new acquisition. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eget nunc eget dolor cursus efficitur a ut purus. Duis id efficitur mi. In aliquam dignissim nisl sit amet placerat. Duis vulputate massa vitae augue pellentesque, eget porttitor massa vestibulum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In finibus ante eu enim consectetur tempus. Nunc erat magna, consectetur in metus tristique, imperdiet hendrerit nunc. In metus magna, tempor a aliquam et, commodo in turpis. Vivamus eu orci quis tellus dictum vestibulum at a augue. Donec condimentum diam vel ex convallis, vitae porta urna finibus. Nunc ac ex id quam dignissim hendrerit. Suspendisse ullamcorper libero ut vehicula porta. Sed eu ante neque.'
        ]);

        DB::table('checklists')->insert([
            'id' =>2,
            'author_id' => 1,
            'name' => "Monthly Financial Reports",
            'department' => "Finance",
            'description' => 'Monthly reports to be uploaded.  <h1>De vacuitate doloris eadem sententia erit.</h1>

<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duo Reges: constructio interrete. <a href="http://loripsum.net/" target="_blank">Sed quanta sit alias, nunc tantum possitne esse tanta.</a> Laboro autem non sine causa; <i>Nos commodius agimus.</i> <mark>Quo studio Aristophanem putamus aetatem in litteris duxisse?</mark> Beatus sibi videtur esse moriens. </p>

<ul>
	<li>Stoici autem, quod finem bonorum in una virtute ponunt, similes sunt illorum;</li>
	<li>Huic mori optimum esse propter desperationem sapientiae, illi propter spem vivere.</li>
	<li>Quis istum dolorem timet?</li>
</ul>


<h2>Consequatur summas voluptates non modo parvo, sed per me nihilo, si potest;</h2>

<p>Aliud igitur esse censet gaudere, aliud non dolere. Ille enim occurrentia nescio quae comminiscebatur; Quis non odit sordidos, vanos, leves, futtiles? Hunc vos beatum; </p>

<blockquote cite="http://loripsum.net">
	Praetereo multos, in bis doctum hominem et suavem, Hieronymum, quem iam cur Peripateticum appellem nescio.
</blockquote>


'
        ]);

        DB::table('checklists')->insert([
            'id' => 3,
            'process_id' => 1,
            'process_order' => 1,
            'author_id' => 1,
            'name' => "Deals Process - Checklist One",
            'description' => 'Figuring out how to handle related parent and child items'
        ]);

        DB::table('checklists')->insert([
            'id' => 4,
            'process_id' => 1,
            'process_order' => 2,
            'author_id' => 1,
            'name' => "Deals Process - Checklist Two",
            'description' => 'This is the second checklist within the deals process'
        ]);
    }
}
