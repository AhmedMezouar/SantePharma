
CREATE TABLE IF NOT EXISTS `ExamenBioch` (
  `ID` int(3) NOT NULL,
  `NOM_DE_ANALYSE` varchar(271) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE IF NOT EXISTS `Bilans` (
  `ID` int(3) NOT NULL,
  `NOM_DE_BILAN` varchar(271) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `stock_Bil_Exam` (
    `id_B` int(3) NOT NULL,
    `id_E` int(3) NOT NULL,
    PRIMARY KEY (`id_B`, `id_E`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `stock_Bil_Exam` 
  ADD CONSTRAINT `fk_stock_Bi` 
  FOREIGN KEY (`id_B`) 
  REFERENCES `Bilans`(`ID`) 
  ON DELETE CASCADE 
  ON UPDATE RESTRICT; 

ALTER TABLE `stock_Bil_Exam` 
  ADD CONSTRAINT `fk_stock_Ex` 
  FOREIGN KEY (`id_E`) 
  REFERENCES `ExamenBioch`(`id`) 
  ON DELETE CASCADE ON UPDATE RESTRICT;

INSERT INTO `ExamenBioch` (`ID`,`NOM_DE_ANALYSE`) VALUES
(1, 'Créatinine'),
(2, 'Glycémie'),
(3, 'Électrolytes'),
(4, 'FSC'),
(5, 'FSC'),
(6, 'AST'),
(7, 'LDH'),
(8, 'FSC'),
(9, 'Troponines'),
(10, 'Amylase'),
(11, 'ALT'),
(12, 'GGT'),
(13, 'Phosphatase alcaline'),
(14, 'Bilirubine totale'),
(15, 'CPK-MB'),
(16, 'Code 50'),
(17, 'Analyse urine'),
(18, 'Beta HCG'),
(19, ' LDL-cholestéro'),
(20, 'GGT'),
(21, 'Anti-DNA'),
(22, 'ANA'),
(23, 'Cholestérol'),
(24, 'Triglycérides'),
(25, 'Fer'),
(26, 'Transferrine'),
(27, 'Ferritine'),
(28, 'saturation transferrine'),
(29, 'VIH'),
(30, 'HBs'),
(31, 'AG'),
(32, 'VDRL'),
(33, 'Vitesse de sédimentation'),
(34, 'Bun'),
(35, 'Protéines totales'),
(36, 'Calcium Albumine'),
(37, 'LDH Phosphatase'),
(38, 'Acide folique'),
(39, 'Protéines C'),
(40, 'protéines S'),
(41, 'Antithrombine III'),
(42, 'coagulogramme complet'),
(43, 'TSH'),
(44, 'Analyse urine'),
(45, 'HCO3'),
(46, 'Drogues de rue'), 
(47, 'Recherche AAS et Acétaminophène'); 




INSERT INTO `Bilans` (`ID`,`NOM_DE_BILAN`) VALUES
(1, 'Base'),
(2, 'Cardiaque'),
(3, 'Digestif'),
(4, 'Enzymes cardiaques '),
(5, 'Gynécologique'),
(6, 'Hépatique'),
(7, 'Inflammatoire'),
(8, 'Lipidique'),
(9, 'Martial'),
(10, 'MTS'),
(11, 'Organique'),
(12, 'Rénale'),
(13, 'Thrombotique'),
(14, 'Thyroïdien'),
(15, 'Toxicologique');