<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_rol');
            $table->text('descripcion')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrentOnUpdate()->nullable();
        });

        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('email')->unique();
            $table->string('contraseña');
            $table->string('telefono')->nullable();
            $table->text('direccion')->nullable();
            $table->timestamp('fecha_registro')->useCurrent();
            $table->foreignId('rol_id')->constrained('roles')->onDelete('cascade');
            $table->rememberToken();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrentOnUpdate()->nullable();
        });

        Schema::create('categorias', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_categoria');
            $table->text('descripcion')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrentOnUpdate()->nullable();
        });

        Schema::create('tallas', function (Blueprint $table) {
            $table->id();
            $table->string('talla');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrentOnUpdate()->nullable();
        });

        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->text('descripcion');
            $table->decimal('precio', 10, 2);
            $table->integer('stock');
            $table->foreignId('categoria_id')->constrained('categorias')->onDelete('cascade');
            $table->foreignId('talla_id')->constrained('tallas')->onDelete('cascade');
            $table->string('imagen_url')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrentOnUpdate()->nullable();
        });

        Schema::create('inventario', function (Blueprint $table) {
            $table->id();
            $table->foreignId('producto_id')->constrained('productos')->onDelete('cascade');
            $table->foreignId('categoria_id')->constrained('categorias')->onDelete('cascade');
            $table->integer('cantidad');
            $table->enum('tipo_movimiento', ['Entrada', 'Salida']);
            $table->enum('estado', ['Agotado', 'SemiAgotado', 'Fully']);
            $table->timestamp('fecha_movimiento')->useCurrent();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrentOnUpdate()->nullable();
        });

        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('usuario_id')->constrained('usuarios')->onDelete('cascade');
            $table->timestamp('fecha_pedido')->useCurrent();
            $table->timestamp('fecha_entrega')->nullable();
            $table->decimal('total', 10, 2);
            $table->enum('estado', ['Entregado', 'Pendiente', 'Cancelado', 'En Curso']);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrentOnUpdate()->nullable();
        });

        Schema::create('eventos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->text('descripcion');
            $table->string('imagen_url')->nullable();
            $table->timestamp('fecha_inicio')->useCurrent();
            $table->timestamp('fecha_fin')->useCurrent();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrentOnUpdate()->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('eventos');
        Schema::dropIfExists('pedidos');
        Schema::dropIfExists('inventario');
        Schema::dropIfExists('productos');
        Schema::dropIfExists('tallas');
        Schema::dropIfExists('categorias');
        Schema::dropIfExists('usuarios');
        Schema::dropIfExists('roles');
    }
};
