# clientePHP
Ejemplo de consumo de web service Konivin con php.

Para uso de es de este ejemplo se debe tener instalado el módulo curl de php 

Comando  para instalar módulo curl
-
*sudo apt-get install php-curl*

Parámetros de entrada del Web Service
--

Cada petición tiene unos datos de entrada que permiten diferenciar el tipo de consulta y el cliente que realiza la misma. Estos datos son obligatorios y permiten el retorno de una estructura tipo JSON para que sea interpretada por el cliente.

Parámetro	Descripción	Ejemplo
-

**hgu**	*Parámetro que permite asignar valores de fecha para aquellas consultas que lo requiera	hgu=2004-06-25*

**hho**	*Parámetro para asignar valor de placa de vehículo para el caso de consulta del RUNT Placa. El valor no debe ir separado por ningún carácter ni por espacios	hho=vpx89c*

**icf**	*Este parámetro define el tipo de documento que se va a consultar, y depende del país. icf=01*

***Por ejemplo para Colombia es:***

> *01*: Cédula de Ciudadanía

> 02: Tarjeta de Identidad

> 03: Cédula de Extranjería

> 04: Registro Civil

> PS: Pasaporte

> NU: Número Único de Identidad Personal

> AI: Adulto Sin Identificación

> MI: Menor Sin Identificación

> CD: Carnet Diplomático

> NI: NIT



**jor**	*Este parámetro define el tipo de consulta que se va a realizar, cada consulta tiene un código que le diferencia de otras.	jor=85423146,12549865*

**klm**	*Este parámetro indica el número de documento que se va a consultar	klm=1111111*

**lcy**	*Este parámetro define el nombre de usuario que va a hacer la consulta.	lcy=usuario*

**thy** *Es el país asociado a la consulta del documento, se utiliza la misma nomenclatura de 2 letras usada por el estándar ISO 3166. Para más referencia de los códigos de países, ver: http://en.wikipedia.org/wiki/ISO_3166-1_alpha-2 Actualmente solamente soportado CO para Colombia y EC para Ecuador. thy=co*

**vpv**	*Este parámetro tiene la contraseña de usuario para poder autenticarse.	vpv=123456*
