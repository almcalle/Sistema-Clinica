
ALTER TABLE `anamnesis` CHANGE `apetito` `apetito` VARCHAR(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL;
ALTER TABLE `anamnesis` CHANGE `miccion` `miccion` VARCHAR(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL;
ALTER TABLE `anamnesis` CHANGE `defecacion` `defecacion` VARCHAR(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL;
ALTER TABLE `anamnesis` CHANGE `sueno` `sueno` VARCHAR(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL;
ALTER TABLE `anamnesis` CHANGE `enfe_cronicas` `enfe_cronicas` VARCHAR(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL;
ALTER TABLE `anamnesis` CHANGE `medicamentos` `medicamentos` VARCHAR(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL;
ALTER TABLE `anamnesis` CHANGE `ante_alergicos` `ante_alergicos` VARCHAR(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL;
ALTER TABLE `anamnesis` CHANGE `habitos_toxicos` `habitos_toxicos` VARCHAR(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL;
ALTER TABLE `anamnesis` CHANGE `ant_hospitalarios` `ant_hospitalarios` VARCHAR(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL;
ALTER TABLE `anamnesis` CHANGE `historial_enfermedades` `historial_enfermedades` VARCHAR(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL;
ALTER TABLE `anamnesis` CHANGE `antecedentes_familiares` `antecedentes_familiares` VARCHAR(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL;

ALTER TABLE `diagnosticos` CHANGE `patologico` `patologico` VARCHAR(200) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL;
ALTER TABLE `diagnosticos` CHANGE `nutricional` `nutricional` VARCHAR(200) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL;
ALTER TABLE `diagnosticos` CHANGE `socieconomico` `socieconomico` VARCHAR(200) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL;
ALTER TABLE `diagnosticos` CHANGE `inmunologico` `inmunologico` VARCHAR(200) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL;
ALTER TABLE `diagnosticos` CHANGE `etario` `etario` VARCHAR(200) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL;

ALTER TABLE `evaluaciones` CHANGE `ojo_izquierdo` `ojo_izquierdo` VARCHAR(20) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NULL;
ALTER TABLE `evaluaciones` CHANGE `ojo_derecho` `ojo_derecho` VARCHAR(20) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NULL;

ALTER TABLE `examen` CHANGE `cabeza` `cabeza` VARCHAR(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL;
ALTER TABLE `examen` CHANGE `oidos` `oidos` VARCHAR(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL;
ALTER TABLE `examen` CHANGE `nariz` `nariz` VARCHAR(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL;
ALTER TABLE `examen` CHANGE `coello` `coello` VARCHAR(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL;
ALTER TABLE `examen` CHANGE `torax` `torax` VARCHAR(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL;
ALTER TABLE `examen` CHANGE `corazon` `corazon` VARCHAR(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL;
ALTER TABLE `examen` CHANGE `abdomen` `abdomen` VARCHAR(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL;
ALTER TABLE `examen` CHANGE `genitales` `genitales` VARCHAR(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL;
ALTER TABLE `examen` CHANGE `extremidades` `extremidades` VARCHAR(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL;
ALTER TABLE `examen` CHANGE `piel` `piel` VARCHAR(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL;
ALTER TABLE `examen` CHANGE `observaciones` `observaciones` VARCHAR(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL;

ALTER TABLE `examen` ADD `faringe` VARCHAR(200) NOT NULL ;
ALTER TABLE `examen` ADD `escoliosis` VARCHAR(200) NOT NULL ;
ALTER TABLE `examen` ADD `dental` VARCHAR(200) NOT NULL ;
ALTER TABLE `examen` ADD `ojo_izquierdo` VARCHAR(20) NOT NULL ;
ALTER TABLE `examen` ADD `ojo_derecho` VARCHAR(20) NOT NULL ;

ALTER TABLE `ficha` ADD `contacto_responsable` VARCHAR(200) NOT NULL ;

ALTER TABLE `evaluaciones` CHANGE `ojo_izquierdo` `ojo_izquierdo` VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NULL DEFAULT NULL;
ALTER TABLE `evaluaciones` CHANGE `ojo_derecho` `ojo_derecho` VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NULL DEFAULT NULL;

-- Cambios del 20-09-2017

ALTER TABLE `examen` ADD `observaciones_visual` VARCHAR(200) NOT NULL ;
ALTER TABLE `ficha` CHANGE `direccion` `direccion` VARCHAR(200) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL;




--Cambio ojos de la tabla examen a evaluaciones
UPDATE
    `examen`,
    `evaluaciones`
SET
    `examen`.`ojo_izquierdo` = `evaluaciones`.`ojo_izquierdo`,
    `examen`.`ojo_derecho` = `evaluaciones`.`ojo_derecho`
WHERE
    `examen`.`identidad` = `evaluaciones`.`identidad` AND(
        `evaluaciones`.`ojo_izquierdo` IS NOT NULL
    ) AND(
        `evaluaciones`.`ojo_derecho` IS NOT NULL
    )

ALTER TABLE `evaluaciones` DROP `ojo_izquierdo`;

ALTER TABLE `evaluaciones` DROP `ojo_derecho`;
