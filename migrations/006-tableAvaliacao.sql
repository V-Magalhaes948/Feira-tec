CREATE TABLE IF NOT EXISTS `feitaTecnica`.`Avaliacao` (
  `idAvaliacao` INT NOT NULL AUTO_INCREMENT,
  `professor_registro` INT NULL,
  `notaGeral` FLOAT NULL,
  `obs` VARCHAR(45) NULL,
  `Trabalho_idTrabalho` INT NOT NULL,
  PRIMARY KEY (`idAvaliacao`),
  INDEX `fk_Avaliacao_professor1_idx` (`professor_registro` ASC),
  INDEX `fk_Avaliacao_Trabalho1_idx` (`Trabalho_idTrabalho` ASC),
  CONSTRAINT `fk_Avaliacao_professor1`
    FOREIGN KEY (`professor_registro`)
    REFERENCES `feitaTecnica`.`professor` (`registro`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Avaliacao_Trabalho1`
    FOREIGN KEY (`Trabalho_idTrabalho`)
    REFERENCES `feitaTecnica`.`Trabalho` (`idTrabalho`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoD