CREATE DATABASE IF NOT EXISTS db_card;
USE db_card;

-- =====================================================
-- Table: type
-- =====================================================
CREATE TABLE type (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL
);

-- =====================================================
-- Table: series
-- =====================================================
CREATE TABLE series (
    id INT AUTO_INCREMENT PRIMARY KEY,
    series VARCHAR(100) NOT NULL,
    release_date DATE
);

-- =====================================================
-- Table: card
-- =====================================================
CREATE TABLE card (
    code VARCHAR(100) PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    type_id INT,
    series_id INT,
    FOREIGN KEY (type_id) REFERENCES type(id),
    FOREIGN KEY (series_id) REFERENCES series(id)
);

INSERT INTO type (name) VALUES
('Energy'),
('Pokemon'),
('Supporter'),
('Item'),
('Tool'),
('Stadium'),
('ACE SPEC'),
('Energy Special');

INSERT INTO series (series, release_date) VALUES
('Base Set', '1999-01-09'),
('Jungle', '1999-06-16'),
('Fossil', '1999-10-10'),
('Team Rocket', '2000-04-24'),
('Neo Genesis', '2000-12-16'),
('Sword & Shield', '2020-02-07'),
('Brilliant Stars', '2022-02-25'),
('Scarlet & Violet', '2023-03-31');

-- =====================================================
-- Insert Data: card (unique code per series)
-- =====================================================
INSERT INTO card (code, name, type_id, series_id) VALUES
-- =====================================================
-- Base Set (series_id = 1)
-- =====================================================
('BS001', 'Charizard', 2, 1),
('BS002', 'Blastoise', 2, 1),
('BS003', 'Venusaur', 2, 1),
('BS004', 'Double Colorless Energy', 1, 1),
('BS005', 'Professor Oak', 3, 1),

-- =====================================================
-- Jungle (series_id = 2)
-- =====================================================
('JG001', 'Snorlax', 2, 2),
('JG002', 'Vaporeon', 2, 2),
('JG003', 'Scyther', 2, 2),
('JG004', 'Poké Ball', 4, 2),
('JG005', 'Energy Search', 4, 2),

-- =====================================================
-- Fossil (series_id = 3)
-- =====================================================
('FS001', 'Gengar', 2, 3),
('FS002', 'Lapras', 2, 3),
('FS003', 'Aerodactyl', 2, 3),
('FS004', 'Recycle', 4, 3),
('FS005', 'Mysterious Fossil', 5, 3),

-- =====================================================
-- Team Rocket (series_id = 4)
-- =====================================================
('TR001', 'Dark Charizard', 2, 4),
('TR002', 'Dark Blastoise', 2, 4),
('TR003', 'Rocket’s Sneak Attack', 3, 4),
('TR004', 'Nightly Garbage Run', 4, 4),
('TR005', 'Full Heal Energy', 8, 4),

-- =====================================================
-- Neo Genesis (series_id = 5)
-- =====================================================
('NG001', 'Lugia', 2, 5),
('NG002', 'Pichu', 2, 5),
('NG003', 'Professor Elm', 3, 5),
('NG004', 'PokéGear', 4, 5),
('NG005', 'Metal Energy', 1, 5),

-- =====================================================
-- Sword & Shield (series_id = 6)
-- =====================================================
('SS001', 'Zacian V', 2, 6),
('SS002', 'Zamazenta V', 2, 6),
('SS003', 'Quick Ball', 4, 6),
('SS004', 'Marnie', 3, 6),
('SS005', 'Ordinary Rod', 4, 6),

-- =====================================================
-- Brilliant Stars (series_id = 7)
-- =====================================================
('BSR001', 'Arceus VSTAR', 2, 7),
('BSR002', 'Charizard VSTAR', 2, 7),
('BSR003', 'Ultra Ball', 4, 7),
('BSR004', 'Cynthia’s Ambition', 3, 7),
('BSR005', 'Double Turbo Energy', 8, 7),

-- =====================================================
-- Scarlet & Violet (series_id = 8)
-- =====================================================
('SV001', 'Miraidon EX', 2, 8),
('SV002', 'Koraidon EX', 2, 8),
('SV003', 'Nest Ball', 4, 8),
('SV004', 'Professor’s Research', 3, 8),
('SV005', 'Basic Lightning Energy', 1, 8);
