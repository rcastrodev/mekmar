<?php

use App\Content;
use Illuminate\Database\Seeder;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /** Home  */
        /** Slider */
        for ($i=0; $i <= 2; $i++) { 
            Content::create([
                'section_id' => 1,
                'order'     => 'AA',
                'image'     => 'images/home/Trazado_8560.svg',
                'content_1' => '<p>AMPLIA EXPERIENCIA<br>FABRICANDO MÁQUINAS<br>PARA LA INDUSTRIA DE LA<br>MARROQUINERÍA Y EL CALZADO</p>',
            ]);
        }

        Content::create([
            'section_id'    => 2,
            'content_1'     => 'SOMOS GARANTÍA DE CALIDAD, CONFIABILIDAD Y SEGURIDAD',
        ]);

        Content::create([
            'section_id'    => 3,
            'content_1'     => 'DISEÑO Y FABRICACIÓN DE <br> EQUIPAMIENTO',
        ]);


        /** Fin home page */

        /** Empresa  */

        Content::create([
            'section_id' => 4,
            'image' => 'images/company/Enmascarar_grupo807.png',
            'content_1' => 'NUESTRA EMPRESA',
            'content_2' => '<p>Tecnología argentina para clientes exigentes, en la industria de la marroquinería y el calzado. Utilizamos tecnología de punta para la fabricación de sacabocados y escalas, le ofrecemos el primer equipamiento integral totalmente desarrollado en Argentina. Con el correr de los años, la empresa fue creciendo con el apoyo de proveedores y clientes, en MEKMAR hemos podido lograr productos exitosos, tanto en la industria de la marroquinería y del calzado.</p>
            <p>Hoy, que contamos con experiencia y con las herramientas adecuadas, hemos decidido brindarle a su empresa todas las opciones de productos que tenemos: vendemos escalas y sacabocados, hacemos escalado de patrones, sacabocados y fabricamos equipamientos para la industria del calzado, textil y marroquinería.</p>'
        ]);
        
         
        Content::create([
            'section_id'    => 5,
            'content_1'     => 'FABRICACIÓN Y DISTRIBUCIÓN DE PRODUCTOS PARA LA INDUSTRIA',
            'content_2'     => '<p>Tras muchos años de trabajo y experiencia, en MEKMAR hemos desarrollado procedimientos claramente definidos para lograr el éxito en el escalado de patrones con pantógrafo computarizado a control numérico. La calidad de un producto depende de la materia prima, nosotros utilizamos aceros BOHELER.</p>',
        ]);

        Content::create([
            'section_id'    => 6,
            'order'         => 'AA',
            'content_1'     => 'NUESTRAS MÁQUINAS',
            'content_2'     => '<p>Entregamos niveles máximos de automatización alcanzando los mejores resultados en la calidad de cortes sobre diseños y cortes precisos y consistentes en el largo plazo.</p><ul><li>Excelente calidad Versatilidad;</li><li>podemos cortar diferentes espesores.</li><li>Posibilidad de realizar formas complejas con alto nivel de repetitividad.</li><li>Excelente relación costo/calidad de corte/productividad.</li></ul>',
        ]);
        
        Content::create([
            'section_id' => 7,
            'order'     => 'BB',
            'image'     => 'images/company/shoe.png',
            'content_1' => 'CALZADO',
        ]);

        Content::create([
            'section_id' => 7,
            'order'     => 'BB',
            'image'     => 'images/company/leather.png',
            'content_1' => 'TEXTIL',
        ]);

        Content::create([
            'section_id' => 7,
            'order'     => 'BB',
            'image'     => 'images/company/portfolio.png',
            'content_1' => 'MARROQUINERÍA',
        ]);

        /** fin empresa  */

        Content::create([
            'section_id' => 8,
            'order'     => 'BB',
            'image'     => '',
            'content_1' => 'ordenador de producción',
            'content_1' => 'motorvía de dos líneas <br> independiente',
        ]);

        Content::create([
            'section_id' => 9,
            'content_1' => '<ul>
            <li>ILUMINACIÓN CON EQUIPOS DE 105 WATS</li>
            <li>REGULACIÓN EN CADA PARANTE PARA SU NIVELACIÓN</li>
            <li>CARROS DE DOS PARES PLASTIFICADOS EN EPOXI MONTADO SOBRE RULEMANES BLINDADOS Y BANDEJAS PORTA INSUMOS</li>
            <li>CAÑERIAS DE AIRE CON LLAVE DE PASO EN CADA UNA DE SUS SALIDAS Y VÁLVULA DE DRENAJE IMPORTADA</li>
            <li>BANDEJA PORTA CABLES CON CUATRO TOMA CORRIENTES IMPORTADOS EN CADA MÓDULO DE 2,5 MTS, PUDIENDOSE CONECTAR TRIFÁSICA Y MONOFÁSICA EN CADA UNA DE ELLAS INDISTINTAMENTE.</li>
            <li>MOTO-REDUCTOR COMBINADO CON VARIADOR DE VELOCIDAD</li>
            <li>TABLERO DE COMANDO PARA CADA LÍNEA COMPUESTO POR TÉRMICAS MONOFÁSICAS Y TRIFÁSICAS SECTORIZADAS.</li>
            <li>VARIADOR DE VELOCIDAD PARA CADA LÍNEA DE PRODUCCIÓN</li>
            <li>TOMAS TRIFÁSICOS Y MONOFÁSICOS AUSTRIACOS</li>
            <li>SENSOR SONORO Y LUMÍNICO CON PARADA DE EMERGENCIA</li>
            <li>CONEXIONES DE AIRE</li>
            <li>CADENA DE TRASLACIÓN A RODILLOS IMPORTADA</li>
        </ul>',
        ]);

        Content::create([
            'section_id' => 10,
            'order'     => 'AA',
            'image'     => 'images/product_shelf/06-Bandejas-Portacables-TOP-DRIVE-2.png',
            'content_1' => 'MARROQUINERÍA',
        ]);

        Content::create([
            'section_id' => 10,
            'order'     => 'AA',
            'image'     => 'images/product_shelf/06-Bandejas-Portacables-TOP-DRIVE-2.png',
        ]);

        Content::create([
            'section_id' => 10,
            'order'     => 'AA',
            'image'     => 'images/product_shelf/06-Bandejas-Portacables-TOP-DRIVE-2.png',
        ]);

        Content::create([
            'section_id' => 10,
            'order'     => 'AA',
            'image'     => 'images/product_shelf/06-Bandejas-Portacables-TOP-DRIVE-2.png',
        ]);

        Content::create([
            'section_id' => 10,
            'order'     => 'AA',
            'image'     => 'images/product_shelf/06-Bandejas-Portacables-TOP-DRIVE-2.png',
        ]);
    }
}