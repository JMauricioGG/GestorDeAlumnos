<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Alumno;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AlumnoControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function puede_listar_alumnos()
    {
        $alumnos = Alumno::factory()->count(2)->create();

        $response = $this->get(route('alumnos.index'));

        $response->assertStatus(200);
        $response->assertSee($alumnos[0]->nombre);
        $response->assertSee($alumnos[1]->nombre);
    }

    /** @test */
    public function puede_ver_formulario_crear_alumno()
    {
        $response = $this->get(route('alumnos.create'));

        $response->assertStatus(200);
        $response->assertSee('Agregar Alumno');
    }

    /** @test */
    public function puede_crear_un_alumno()
    {
        $data = [
            'codigo' => '1234567',
            'nombre' => 'Juan Perez',
            'correo' => 'juan@example.com',
            'fecha_nacimiento' => '2005-01-01',
            'sexo' => 'M',
            'carrera' => 'Ingeniería',
        ];

        $response = $this->post(route('alumnos.store'), $data);

        $response->assertRedirect(route('alumnos.index'));
        $this->assertDatabaseHas('alumnos', ['correo' => 'juan@example.com']);
    }

    /** @test */
    public function puede_ver_formulario_editar_alumno()
    {
        $alumno = Alumno::factory()->create();

        $response = $this->get(route('alumnos.edit', $alumno->id));

        $response->assertStatus(200);
        $response->assertSee('Editar Alumno');
        $response->assertSee($alumno->nombre);
    }

    /** @test */
    public function puede_actualizar_un_alumno()
    {
        $alumno = Alumno::factory()->create();

        $data = [
            'codigo' => $alumno->codigo,
            'nombre' => 'Nombre Actualizado',
            'correo' => $alumno->correo,
            'fecha_nacimiento' => $alumno->fecha_nacimiento,
            'sexo' => $alumno->sexo,
            'carrera' => $alumno->carrera,
        ];

        $response = $this->put(route('alumnos.update', $alumno->id), $data);

        $response->assertRedirect(route('alumnos.index'));
        $this->assertDatabaseHas('alumnos', ['nombre' => 'Nombre Actualizado']);
    }

    /** @test */
    public function puede_eliminar_un_alumno()
    {
        $alumno = Alumno::factory()->create();

        $response = $this->delete(route('alumnos.destroy', $alumno->id));

        $response->assertRedirect(route('alumnos.index'));
        $this->assertDatabaseMissing('alumnos', ['id' => $alumno->id]);
    }
}
