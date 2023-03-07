<?php

use App\Support\Collection;
use PHPUnit\Framework\TestCase;

final class CollectionTest extends TestCase{

    /** @test */
    public function empty_instantiated_collection_returns_no_items()
    {
        $collection= new Collection;

        $this->assertEmpty($collection->get());
    }

    /** @test */
    public function count_is_correct_for_items_passed_in(){
        $collection = new Collection([
            'one', 'two', 'three'
        ]);

        $this->assertEquals(3, $collection->count());
    }

    /** @test */
    public function items_returned_match_items_passed_in(){
        $collection = new Collection([
            'one', 'two'
        ]);

        $this->assertCount(2, $collection->get());
        $this->assertEquals($collection->get()[0], 'one');
        $this->assertEquals($collection->get()[1], 'two');
    }
}