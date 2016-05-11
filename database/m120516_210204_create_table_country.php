<?php

use yii\db\Migration;

class m120516_210204_create_table_country extends Migration {
    
    public $tableName = '{{%tbl_country}}';
    
    public function up() {
        
        $tableOptions = null;
        
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable($this->tableName, [
            'code' => $this->primaryKey(),
            'name' => $this->string(52)->notNull(),
            'population' => $this->string(11)->notNull()->defaultValue(0)
        ], $tableOptions);
        
        $data = [
            [ 'code' => 'AU', 'name' => 'Australia', 'population' => 24016400 ],
            [ 'code' => 'BR', 'name' => 'Brazil', 'population' => 205722000 ],
            [ 'code' => 'CA', 'name' => 'Canada', 'population' => 35985751 ],
            [ 'code' => 'CN', 'name' => 'China', 'population' => 1375210000 ],
            [ 'code' => 'DE', 'name' => 'Germany', 'population' => 81459000 ],
            [ 'code' => 'FR', 'name' => 'France', 'population' => 64513242 ],
            [ 'code' => 'GB', 'name' => 'United Kingdom', 'population' => 65097000 ],
            [ 'code' => 'IN', 'name' => 'India', 'population' => 1285400000 ],
            [ 'code' => 'RU', 'name' => 'Russia', 'population' => 146519759 ],
            [ 'code' => 'US', 'name' => 'United States', 'population' => 322976000 ],
            [ 'code' => 'TH', 'name' => 'Thailand', 'population' => 35985751 ],
        ];
        
        foreach ($data as $items) {
            $this->insert($this->tableName, [ 
                'code' => $items['code'], 
                'name' => $items['name'], 
                'population' => $items['population']
            ]);
        }
        
    }

    public function down(){
        $this->dropTable($this->tableName);
    }
    
}