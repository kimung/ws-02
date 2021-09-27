<?php


use Phinx\Seed\AbstractSeed;

class ProductSeeder extends AbstractSeed
{
    public function getDependencies()
    {
        return [
            'CategorySeeder',
        ];
    }

    public function run()
    {
        $data = [
            [
                'id'          => 1,
                'name'        => 'Perles rondes en résine acrylique - Le ciel pearls Miyuki 6mm - orange',
                'ref'         => 'TIQ-695',
                'category_id' => 3,
                'price'       => 280,
            ], [
                'id'          => 2,
                'name'        => 'Perles rondes en résine acrylique - Le ciel pearls Miyuki 8mm - orange',
                'ref'         => 'TIQ-699',
                'category_id' => 3,
                'price'       => 280,
            ], [
                'id'          => 3,
                'name'        => 'Perles rondes en résine acrylique - Le ciel pearls Miyuki 10mm - orange',
                'ref'         => 'TIQ-703',
                'category_id' => 3,
                'price'       => 280,
            ], [
                'id'          => 4,
                'name'        => 'Perles rondes en résine acrylique - Le ciel pearls Miyuki 6mm - pink',
                'ref'         => 'TIQ-694',
                'category_id' => 3,
                'price'       => 280,
            ], [
                'id'          => 5,
                'name'        => 'Perles rondes en résine acrylique - Le ciel pearls Miyuki 8mm - pink',
                'ref'         => 'TIQ-698',
                'category_id' => 3,
                'price'       => 280,
            ], [
                'id'          => 6,
                'name'        => 'Perles rondes en résine acrylique - Le ciel pearls Miyuki 10mm - pink',
                'ref'         => 'TIQ-702',
                'category_id' => 3,
                'price'       => 280,
            ], [
                'id'          => 7,
                'name'        => 'Perles rondes en résine acrylique - Le ciel pearls Miyuki 6mm - purple',
                'ref'         => 'TIQ-696',
                'category_id' => 3,
                'price'       => 280,
            ], [
                'id'          => 8,
                'name'        => 'Perles rondes en résine acrylique - Le ciel pearls Miyuki 8mm - purple',
                'ref'         => 'TIQ-700',
                'category_id' => 3,
                'price'       => 280,
            ], [
                'id'          => 9,
                'name'        => 'Perles rondes en résine acrylique - Le ciel pearls Miyuki 10mm - purple',
                'ref'         => 'TIQ-704',
                'category_id' => 3,
                'price'       => 280,
            ], [
                'id'          => 10,
                'name'        => 'Perles rondes en résine acrylique - Le ciel pearls Miyuki 6mm - blue',
                'ref'         => 'TIQ-697',
                'category_id' => 3,
                'price'       => 280,
            ], [
                'id'          => 11,
                'name'        => 'Perles rondes en résine acrylique - Le ciel pearls Miyuki 8mm - blue',
                'ref'         => 'TIQ-701',
                'category_id' => 3,
                'price'       => 280,
            ], [
                'id'          => 12,
                'name'        => 'Perles rondes en résine acrylique - Le ciel pearls Miyuki 10mm - blue',
                'ref'         => 'TIQ-705',
                'category_id' => 3,
                'price'       => 280,
            ], [
                'id'          => 13,
                'name'        => 'Perle japonaise Tensha en résine - Decal Miyuki 12mm - Bleu - Vert - Doré',
                'ref'         => 'TIQ-712',
                'category_id' => 4,
                'price'       => 280,
            ], [
                'id'          => 14,
                'name'        => 'Perle japonaise Tensha en résine - Decal Miyuki 14mm - Bleu - Vert - Doré',
                'ref'         => 'TIQ-719',
                'category_id' => 4,
                'price'       => 15,
            ],
        ];

        $products = $this->table('products');
        $products->insert($data)->saveData();
    }
}
