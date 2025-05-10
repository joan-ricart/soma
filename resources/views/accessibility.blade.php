@extends('layouts.app')

@section('title', 'Accesibilidad')

@section('content')
    <main class="container min-h-screen pb-20 pt-28">
        <div class="mb-10 text-center">
            <a href="{{ route('home') }}" class="inline-block">
                <img src="{{ asset('images/logo-soma.svg') }}" alt="SOMA Restaurant" width="191" height="57" />
            </a>
        </div>
        <h1 class="text-soma-green mb-8 text-center text-xl uppercase">Accesibilidad</h1>
        <div class="space-y-4">
            <p>La presente declaración de accesibilidad se aplica al sitio web https://soma-restaurant.com/:</p>
            <p class="font-bold">SITUACIÓN DE CUMPLIMIENTO</p>
            <p>Este sitio web es parcialmente conforme con el RD 1112/2018 debido a las excepciones y a la falta de
                conformidad de los aspectos que se indican en el siguiente punto.</p>
            <p class="font-bold">CONTENIDO NO ACCESIBLE</p>
            <p>El contenido que se recoge a continuación no es accesible por lo siguiente:</p>
            <ul class="list-disc pl-4">
                <li>Falta de conformidad con el RD 1112/2018</li>
            </ul>
            <p>Podrían existir algunos aspectos de contraste que no cumplan los mínimos exigidos, 3:1, con respecto a los
                colores adyacentes del fondo de la sección de la web en cuestión. [9.1.4.11 Contraste no textual]</p>
            <p>Podrían existir algunas etiquetas o instrucciones no etiquetadas correctamente [9.3.3.2 Etiquetas o
                instrucciones]</p>
            <p>Podrían existir mensajes de estado que no cumplan con los mínimos exigidos [9.4.1.3 Mensajes de estado]</p>
            <p>Podrían existir sugerencias ante errores que no cumplan con los mínimos exigidos [9.3.3.3 Sugerencias ante
                errores (condicional)]</p>
            <p>Podrían existir fallos en la navegación secuencial por la página web afectando a su significado o su
                operación [9.2.4.3 Orden del foco]</p>
            <p>No es posible evitar que las personas que interactúan mediante entradas de voz activen los elementos de
                interacción de forma accidental [requisito 9.2.1.4 – Atajos con teclas de caracteres]</p>
            <ul class="list-disc pl-4">
                <li>Podrían existir fallos puntuales de edición en alguna página web</li>
            </ul>
            <p>Carga desproporcionada<br>No aplica.</p>
            <p class="font-bold">PREPARACIÓN DE LA SIGUIENTE DECLARACIÓN DE ACCESIBILIDAD</p>
            <p>La presente declaración fue preparada el 12 de febrero de 2024.<br>El método empleado para preparar la
                declaración ha sido una autoevaluación llevada a cabo por la propia empresa.</p>
            <p class="font-bold">OBSERVACIONES Y DATOS DE CONTACTO</p>
            <p>Puede realizar comunicaciones sobre requisitos de accesibilidad (artículo 10.2.a del RD 1112/2018) como, por
                ejemplo:</p>
            <ul class="list-disc pl-4">
                <li>Informar sobre cualquier posible incumplimiento por parte de este sitio web</li>
                <li>Transmitir otras dificultades de acceso al contenido</li>
                <li>Formular cualquier otra consulta o sugerencia de mejora relativa a la accesibilidad del sitio web</li>
            </ul>
            <p>A través del email de contacto hola@soma-restaurant.com.</p>
            <p>Puede presentar:</p>
            <ul class="list-disc pl-4">
                <li>Queja relativa al cumplimiento de los requisitos del RD 1112/2018 o</li>
                <li>Solicitud de Información accesible relativa a:
                    <ul class="list-disc pl-4">
                        <li>Contenidos que están excluidos del ámbito de aplicación del RD 1112/2018 según lo establecido
                            por el artículo 3, apartado 4</li>
                        <li>Contenidos que están exentos del cumplimiento de los requisitos de accesibilidad por imponer una
                            carga desproporcionada.</li>
                    </ul>
                </li>
            </ul>
            <p>En la Solicitud de información accesible, se debe concretar, con toda claridad, los hechos, razones y
                petición que permitan constatar que se trata de una solicitud razonable y legítima.</p>
            <p>Las quejas y reclamaciones sobre información accesible&nbsp;se realizarán a través del email anterior.</p>
            <p class="font-bold">PROCEDIMIENTO DE APLICACIÓN</p>
            <p>Si una vez realizada una solicitud de información accesible o queja, ésta hubiera sido desestimada, no se
                estuviera de acuerdo con la decisión adoptada, o la respuesta no cumpliera los requisitos contemplados en el
                artículo 12.5, la persona interesada podrá iniciar una reclamación. Igualmente se podrá iniciar una
                reclamación en el caso de que haya transcurrido el plazo de veinte días hábiles sin haber obtenido
                respuesta.</p>
        </div>
    </main>
@endsection
