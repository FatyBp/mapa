-- pxjmMAdmin*WQ!D5Er*�- ~er{og� 5.0.d
- hdtpq�/�wwwpH8m{a$ehlnet/
�-%/�S�rvi�lr:$0��.0/0*q�;0/-0Viemp!eg)kmneRacIû�1�6-05-202�`m�n%s 3:65:q`
%- V%rwiC3n eel smrthdOR: 70.4.17=�a�yaDB
,-"Versión $e �P:%8/4.2�EF�L_MOFE =�^O_YWUO_RA��U_NN_zG�O#�
[tQR TRANSA�tYOn�
SED tHee_Zone � "+20:00#[

/+ 40901 SAT(a_MD_CHQSECPER_RETOCLI�J�}@ACHCRACDR_:UTwKLAENT j/;
/j �00)�S\$HK,D^�HAv@CTER_SU\_�SUMTS=HRCLABEATUR]QE_FESUD�W$*O:
o,,01 u`S�Td@_\D_IMLAU�LN_C��NECtIOn%�`cKNL@DI^N_CONN�CKkN%./;/"!4"10 w]V�JAYES)mdfhmb4�*/�-
-- Babe�dq"t�t�s:�dpa{sek`/-

-% ----=�--m-------,$---)---===---�)---/�a-)-%---�-�=%--$%�
o,
�-!E�tvt#tu�a `�!tabl` pav`��a ��b|#$�}gonti}ent�R�--

BpEATE TARLE`au_co�t).dNz�7@!)J �`ht_continun�e` int!0(dOt!_�NL(
 �h.o��r�Contindove` 6arghqs�255) NYT�N�L$  hdeCaripc)OnG.t9neN|t` varclar(2w�  ^OT jULi EnSInU9�nnoLJ dMOAuLt HAR�a\<ud�<ib4;
i-
-!V/mce-;ee$dAtOs�0ab! la(tacd` `t_conpilan6es`
--
K�SERT I^T �tUknn4ihglteci!*`�`�#jntaje~ve`( `n/�b�eContInendm`�``$EscripcionContinente`) VALUES
(1, 'América', 'El continente mas famoso de los 5 que hay.'),
(2, 'Asia', 'El continente mas grande del mundo'),
(3, 'Europa', 'El viejo continente y comparte territorio con Asia.'),
(4, 'África', 'El continente que esta separado de Europa por el Mar Mediterráneo.'),
(5, 'Oceanía', 'El continente mas pequeño del mundo.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_paises`
--

CREATE TABLE `t_paises` (
  `id_pais` int(11) NOT NULL,
  `id_continente` int(11) NOT NULL,
  `nombrePais` varchar(255) NOT NULL,
  `descripcionPais` varchar(255) NOT NULL,
  `urlPais` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `t_paises`
--

INSERT INTO `t_paises` (`id_pais`, `id_continente`, `nombrePais`, `descripcionPais`, `urlPais`) VALUES
(1, 1, 'México', 'El país de los Tacos.', 'https://upload.wikimedia.org/wikipedia/commons/thumb/c/c5/Bandera_de_M%C3%A9xico_%281914-1920%29.svg/1200px-Bandera_de_M%C3%A9xico_%281914-1920%29.svg.png'),
(2, 1, 'Canadá', 'El país con Invierno, hojas y miel de maple.', 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d9/Flag_of_Canada_%28Pantone%29.svg/200px-Flag_of_Canada_%28Pantone%29.svg.png'),
(3, 1, 'Colombia', 'El país con mas gente hermosa.', 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/97/Flag_of_the_Gran_Colombia.svg/200px-Flag_of_the_Gran_Colombia.svg.png'),
(4, 1, 'Argentina', 'El país con \'La mano de Dios\'.', 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/1a/Flag_of_Argentina.svg/200px-Flag_of_Argentina.svg.png'),
(5, 1, 'Brasil', 'El país con mas desfiles y carnavales al año.', 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/05/Flag_of_Brazil.svg/300px-Flag_of_Brazil.svg.png'),
(6, 2, 'China', 'El país con mas habitantes en el mundo.', 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Flag_of_the_People%27s_Republic_of_China.svg/200px-Flag_of_the_People%27s_Republic_of_China.svg.png'),
(7, 2, 'Japón', 'El país mas tecnológico', 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/9e/Flag_of_Japan.svg/200px-Flag_of_Japan.svg.png'),
(8, 2, 'Malasia', 'El país con armonía multiétnica', 'https://upload.wikimedia.org/wikipedia/commons/b/b1/Malasia_Flag.png'),
(9, 2, 'Tailandia', 'El país con templos y palacios turísticos en Bangkok, su capital.', 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/a9/Flag_of_Thailand.svg/1200px-Flag_of_Thailand.svg.png'),
(10, 2, 'Singapur', 'El país que esta conformada en su mayoría por islas.', 'https://upload.wikimedia.org/wikipedia/commons/4/48/Flag_of_Singapore.svg'),
(11, 3, 'Finlandia', 'El país mas feliz del mundo.', 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/bc/Flag_of_Finland.svg/135px-Flag_of_Finland.svg.png'),
(12, 3, 'Alemania', 'El país con mas guerras históricas.', 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/ba/Flag_of_Germany.svg/200px-Flag_of_Germany.svg.png'),
(13, 3, 'Francia', 'El país mas elegante y refinado.', 'https://upload.wikimedia.org/wikipedia/commons/thumb/c/c3/Flag_of_France.svg/270px-Flag_of_France.svg.png'),
(14, 3, 'Italia', 'El país de la gastronomía y el arte.', 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/03/Flag_of_Italy.svg/200px-Flag_of_Italy.svg.png'),
(15, 3, 'Suiza', 'El país excursionista.', 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/92/Civil_Ensign_of_Switzerland_%28Pantone%29.svg/120px-Civil_Ensign_of_Switzerland_%28Pantone%29.svg.png'),
(16, 4, 'Egipto', 'El país mas caluroso y arenoso.', 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/fe/Flag_of_Egypt.svg/200px-Flag_of_Egypt.svg.png'),
(17, 4, 'Marruecos', 'El país que aun vive en el medievo.', 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/2c/Flag_of_Morocco.svg/200px-Flag_of_Morocco.svg.png'),
(18, 4, 'Togo', 'El país mas pequeño de África.', 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/68/Flag_of_Togo.svg/200px-Flag_of_Togo.svg.png'),
(19, 4, 'Sudáfrica', 'El país africano en ascenso del continente.', 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/af/Flag_of_South_Africa.svg/200px-Flag_of_South_Africa.svg.png'),
(20, 4, 'Madagascar', 'El país insular con mas fauna y flora varaiada.', 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/bc/Flag_of_Madagascar.svg/200px-Flag_of_Madagascar.svg.png'),
(21, 5, 'Nueva Zelanda', 'El país volcánico.', 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/3e/Flag_of_New_Zealand.svg/200px-Flag_of_New_Zealand.svg.png'),
(22, 5, 'Australia', 'El país con la fauna mas salvaje.', 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/88/Flag_of_Australia_%28converted%29.svg/200px-Flag_of_Australia_%28converted%29.svg.png'),
(23, 5, 'Fiyi', 'El país de las islas escabrosas', 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/ba/Flag_of_Fiji.svg/200px-Flag_of_Fiji.svg.png'),
(24, 5, 'Palaos', 'El país que es el centro de comercial de islas', 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/48/Flag_of_Palau.svg/200px-Flag_of_Palau.svg.png'),
(25, 5, 'Papúa Nueva Guinea', 'El país con mayor diversidad biológica marina.', 'https://upload.wikimedia.org/wikipedia/commons/thumb/e/e3/Flag_of_Papua_New_Guinea.svg/200px-Flag_of_Papua_New_Guinea.svg.png'),
(30, 1, 'Estados Unidos', 'El país mas ególatra', 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/a4/Flag_of_the_United_States.svg/200px-Flag_of_the_United_States.svg.png');

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `v_continente_pais`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `v_continente_pais` (
`idContinente` int(11)
,`nombreContinente` varchar(255)
,`descripcionContinente` varchar(255)
,`idPais` int(11)
,`nombrePais` varchar(255)
,`descripcionPais` varchar(255)
,`urlPais` text
);

-- --------------------------------------------------------

--
-- Estructura para la vista `v_continente_pais`
--
DROP TABLE IF EXISTS `v_continente_pais`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_continente_pais`  AS SELECT `t_continentes`.`id_continente` AS `idContinente`, `t_continentes`.`nombreContinente` AS `nombreContinente`, `t_continentes`.`descripcionContinente` AS `descripcionContinente`, `t_paises`.`id_pais` AS `idPais`, `t_paises`.`nombrePais` AS `nombrePais`, `t_paises`.`descripcionPais` AS `descripcionPais`, `t_paises`.`urlPais` AS `urlPais` FROM (`t_continentes` join `t_paises` on(`t_continentes`.`id_continente` = `t_paises`.`id_continente`)) ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `t_continentes`
--
ALTER TABLE `t_continentes`
  ADD PRIMARY KEY (`id_continente`);

--
-- Indices de la tabla `t_paises`
--
ALTER TABLE `t_paises`
  ADD PRIMARY KEY (`id_pais`),
  ADD KEY `id_continente` (`id_continente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `t_continentes`
--
ALTER TABLE `t_continentes`
  MODIFY `id_continente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `t_paises`
--
ALTER TABLE `t_paises`
  MODIFY `id_pais` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `t_paises`
--
ALTER TABLE `t_paises`
  ADD CONSTRAINT `t_paises_ibfk_1` FOREIGN KEY (`id_continente`) REFERENCES `t_continentes` (`id_continente`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
