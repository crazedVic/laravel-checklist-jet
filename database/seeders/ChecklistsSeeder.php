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
            'workflow_id' => 1,
            'sort_order' => 1,
            'author_id' => 1,
            'name' => "Organization",
            'description' => 'Track due diligence requirements for new acquisition.'
        ]);

        DB::table('checklists')->insert([
            'id' =>2,
            'workflow_id' => 1,
            'sort_order' => 2,
            'author_id' => 1,
            'name' => "Financial Items",
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
            'workflow_id' => 1,
            'sort_order' => 3,
            'author_id' => 1,
            'name' => "Physical Assets",
            'description' => 'Figuring out how to handle related parent and child items'
        ]);

        DB::table('checklists')->insert([
            'id' => 4,
            'workflow_id' => 1,
            'sort_order' => 4,
            'author_id' => 1,
            'name' => "Real Estate",
            'description' => 'This is the second checklist within the deals process'
        ]);
    }
}
