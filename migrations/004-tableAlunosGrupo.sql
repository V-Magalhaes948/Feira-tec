CREATE TABLE IF NOT EXISTS `feitaTecnica`.`AlunosGrupo` (
  `Trabalho_idTrabalho` INT NOT NULL,
  `matriculaAluno` VARCHAR(45) NOT NULL,
  `nomeAluno` VARCHAR(45) NOT NULL,
  `turmaAluno` VARCHAR(45) NULL,
  INDEX `fk_Trabalho_has_Curso_Trabalho_idx` (`Trabalho_idTrabalho` ASC),
  PRIMARY KEY (`matriculaAluno`, `Trabalho_idTrabalho`),
  CONSTRAINT `fk_Trabalho_has_Curso_Trabalho`
    FOREIGN KEY (`Trabalho_idTrabalho`)
    REFERENCES `feitaTecnica`.`Trabalho` (`idTrabalho`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;