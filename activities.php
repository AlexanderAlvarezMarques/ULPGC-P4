<?php

	include ("presentation.class.php");
	View::start();
	View::header();

	?>
    <!-- Seccion central -->
    <section class="central">
        <div class="container title">
            <h1>Actividades populares en GCActiva</h1>
        </div>
        <div class="background">
            <div class="container content">
                <div class="margin">
                    <p>&nbsp;&nbsp; Si desea saber más acerca de alguna de nuestra actividades, puede hacer click 
                        en el nombre de la actividad deseada para acceder a información detallada sobre cada una de ellas.
                    </p>
                </div>
                
                <div class="table_container">
                    <table id="activities">
                        <tr>
                            <th> Actividad </th>
                            <th class="lugartabla"> Lugar </th>
                            <th class="desc-tabla"> Descripción </th>
                        </tr>
                        <tr>
                            <td class="linktabla"><a href=""> Opera Rigoletto </a></td>
                            <td class="lugartabla"> Auditorio </td>
                            <td class="desc-tabla"> Asiste a Rigoletto, es una ópera en tres actos con música de Giuseppe 
                                Verdi y libreto en italiano de Francesco Maria Piave, basado en la obra teatral Le roi s'amuse,
                                 de Víctor Hugo. Precio: 33.5€. </td>
                        </tr>
                        <tr>
                            <td class="linktabla"><a href=""> Juanes </a></td>
                            <td class="lugartabla"> Auditorio </td>
                            <td class="desc-tabla"> Asiste al concierto de uno de los mejores compositores colombianos de pop
                                latino y rock en español. Precio: 26.5€.</td>
                        </tr>
                        <tr>
                            <td class="linktabla"><a href=""> Observatorio </a></td>
                            <td class="lugartabla"> Guayadaque-Temisas</td>
                            <td class="desc-tabla"> Disfruta de un día espectacular en el aumentas tus conocimientos
                                sobre el espacio y/o las estrellas y contemplas el cielo estrellado. Precio: 18.5€.</td>
                        </tr>
                        <tr>
                            <td class="linktabla"><a href=""> Los Miserables </a></td>
                            <td class="lugartabla"> Auditorio </td>
                            <td class="desc-tabla"> Los miserables es una novela del poeta y escritor francés Victor Hugo 
                                publicada en 1862, considerada como una de las obras más importantes del siglo XIX. 
                                Precio: 28.0€.</td>
                        </tr>
                        <tr>
                            <td class="linktabla"><a href=""> Sendero de la Caldera Bandama </a></td>
                            <td class="lugartabla"> Caldera Bandama </td>
                            <td class="desc-tabla"> Recorre los múltiples senderos que rodean lo que antes fue un
                            volcán activo de la isla. Precio: 12.0€.</td>
                        </tr>
                        <tr>
                            <td class="linktabla"><a href=""> Camino de la Rama </a></td>
                            <td class="lugartabla"> Agaete </td>
                            <td class="desc-tabla"> El Camino de la Rama, también conocido como Camino del Pinar, 
                                une el pinar de Tamadaba con el Valle de Agaete. La caminata se realiza por caminos de herradura, 
                                pistas agrícolas y forestales. Precio: 15.0€.</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </section>
<?php
	View::footer();
?>
