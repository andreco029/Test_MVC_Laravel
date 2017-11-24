<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
   
    public function testBasicExample()
    {
        $this->visit('/')
             ->see('Laravel');
    }
	
	public Function testProductoStore()
	{
		$this->post('/api/productos/producto',[
		'nombre'  => 'arroz',
		'categoria'  => 'grano',
		'cantidad'  => '1',
	])
	
	->seeJson([
	     'Mensaje' => 'el producto se creo correctamente',
		
	      ]);

    }
	
	public function testProductoUpdate()
	{
		$this->put('/api/productos/producto',[
		'nombre'  => 'arroz',
		'categoria'  => 'grano',
		'cantidad'  => '1',
	])
	
	->seeJson([
	     'Mensaje' => 'el producto se creo correctamente',
		
	      ]);
		
		}	

      public function testProductoShow()
	{
		$this->get('/api/productos/producto/',[
		'nombre'  => 'sal',
		'categoria'  => 'grano',
		'cantidad'  => '2',
	])
	
	->seeJson([
	     'Mensaje' => 'el producto se creo correctamente',
		
	      ]);
		
		}	

		
		
	}
	
	
	
	
	

