<?php

use Phinx\Seed\AbstractSeed;

class CategorySeeder extends AbstractSeed
{
    public function run()
    {
        $data = [
            [
                'id'        => 1,
                'parent_id' => null,
                'name'      => 'Perles de rocailles',
            ], [
                'id'        => 2,
                'parent_id' => 1,
                'name'      => 'Miyuki',
            ], [
                'id'        => 3,
                'parent_id' => 2,
                'name'      => 'Ciel pearls',
            ], [
                'id'        => 4,
                'parent_id' => 2,
                'name'      => 'Decal beads',
            ], [
                'id'        => 5,
                'parent_id' => 1,
                'name'      => 'Matubo',
            ], [
                'id'        => 6,
                'parent_id' => 1,
                'name'      => 'Toho',
            ], [
                'id'        => 7,
                'parent_id' => 6,
                'name'      => 'Toho Hex Cut',
            ], [
                'id'        => 8,
                'parent_id' => 6,
                'name'      => 'Toho Treasures',
            ], [
                'id'        => 9,
                'parent_id' => 6,
                'name'      => 'Triangle Toho',
            ],
        ];

        $categories = $this->table('categories');
        $categories->insert($data)->saveData();
    }
}
