CREATE TABLE IF NOT EXISTS `feitaTecnica`.`professor` (
  `registro` INT NOT NULL,
  `nome` VARCHAR(45) NULL,
  `nascimento` VARCHAR(45) NULL,
  PRIMARY KEY (`registro`))
ENGINE = InnoDB;