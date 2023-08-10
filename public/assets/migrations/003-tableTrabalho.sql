CREATE TABLE IF NOT EXISTS `feitaTecnica`.`Trabalho` (
  `idTrabalho` INT NOT NULL AUTO_INCREMENT,
  `nomeTrabalho` VARCHAR(128) NOT NULL,
  `resumo` VARCHAR(256) NULL,
  `Curso_idCurso` INT NOT NULL,
  PRIMARY KEY (`idTrabalho`),
  INDEX `fk_Trabalho_Curso1_idx` (`Curso_idCurso` ASC),
  CONSTRAINT `fk_Trabalho_Curso1`
    FOREIGN KEY (`Curso_idCurso`)
    REFERENCES `feitaTecnica`.`Curso` (`idCurso`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;