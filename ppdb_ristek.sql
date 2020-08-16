-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2020 at 04:03 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codeigniter-krs`
--
CREATE DATABASE IF NOT EXISTS `codeigniter-krs` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `codeigniter-krs`;

-- --------------------------------------------------------

--
-- Table structure for table `krs`
--

CREATE TABLE `krs` (
  `id` int(11) NOT NULL,
  `mahasiswa` varchar(50) NOT NULL DEFAULT '0',
  `matakuliah` varchar(1000) NOT NULL DEFAULT '0',
  `jurusan` varchar(50) NOT NULL DEFAULT '0',
  `sks` int(11) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `krs`
--

INSERT INTO `krs` (`id`, `mahasiswa`, `matakuliah`, `jurusan`, `sks`) VALUES
(11, 'Fahrul', 'OOP 2,Metode Numerik,OOP 1,Web Designs,Sistem Jaringan', 'Teknik Informatika', 18);

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL DEFAULT '0',
  `semester` int(11) DEFAULT NULL,
  `ipk` float DEFAULT NULL,
  `fakultas` varchar(50) NOT NULL DEFAULT '0',
  `jurusan` varchar(50) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `semester`, `ipk`, `fakultas`, `jurusan`) VALUES
(1504030032, 'Fahrul', 4, 3.2, 'Teknik', 'Teknik Informatika'),
(1504030041, 'Danma', NULL, NULL, 'Teknik', 'Teknik Informatika'),
(1502031222, 'Ransack', 2, 3.2, 'Teknik', 'Teknik Informatika');

-- --------------------------------------------------------

--
-- Table structure for table `matakuliah`
--

CREATE TABLE `matakuliah` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL DEFAULT '0',
  `semester` int(11) DEFAULT NULL,
  `sks` int(11) DEFAULT NULL,
  `fakultas` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matakuliah`
--

INSERT INTO `matakuliah` (`id`, `nama`, `semester`, `sks`, `fakultas`, `jurusan`) VALUES
(1, 'OOP 2', 2, 3, 'Teknik', 'Teknik Informatika'),
(3, 'Metode Numerik', 2, 4, 'Teknik', 'Teknik Industri'),
(4, 'Web Designs', 4, 4, 'Teknik', 'Teknik Informatika'),
(5, 'OOP 1', 2, 3, 'Teknik', 'Teknik Informatika'),
(6, 'Sistem Jaringan', 4, 4, 'Teknik', 'Teknik Informatika'),
(7, 'Pendidikan Pancasila', 4, 2, 'Teknik', 'Teknik Informatika'),
(8, 'Kalkulus', 4, 4, 'Teknik', 'Teknik Informatika'),
(9, 'Kalkulus 2', 5, 3, 'Teknik', 'Teknik Informatika');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `krs`
--
ALTER TABLE `krs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `krs`
--
ALTER TABLE `krs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `nim` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1504030045;

--
-- AUTO_INCREMENT for table `matakuliah`
--
ALTER TABLE `matakuliah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Database: `pegawai`
--
CREATE DATABASE IF NOT EXISTS `pegawai` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `pegawai`;

-- --------------------------------------------------------

--
-- Table structure for table `tb_karyawan`
--

CREATE TABLE `tb_karyawan` (
  `id_karyawan` int(11) NOT NULL,
  `no_pegawai` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jk` varchar(15) NOT NULL,
  `status` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_karyawan`
--

INSERT INTO `tb_karyawan` (`id_karyawan`, `no_pegawai`, `nama`, `jk`, `status`, `tgl_lahir`, `alamat`, `email`) VALUES
(1, 'Kar01Edit', 'Nama edit', 'Laki-laki', 'Menikah', '2018-06-07', 'Jakarta', 'Contoh@gmail.com'),
(2, 'Kar02', 'Joko', 'Laki-laki', 'Menikah', '1998-01-02', 'Kehitam', ''),
(3, 'Kar03', 'Tatang', 'Laki-laki', 'Belum Menikah', '1997-08-21', 'Mulyokarta', ''),
(4, 'Kar04', 'Sari', 'Perempuan', 'Belum Menikah', '1998-05-23', 'Meikartu', ''),
(5, 'Kar05', 'Nida', 'Perempuan', 'Menikah', '1995-08-09', 'Bandung', ''),
(6, 'Kar06', 'Dani', 'Laki-laki', 'Menikah', '1996-03-22', 'Jakarta', ''),
(7, 'Kar07', 'Risa', 'Perempuan', 'Belum Menikah', '1998-05-23', 'Meikartu', ''),
(8, 'Kar08', 'Andi', 'Laki-laki', 'Menikah', '1995-04-09', 'Bandung', ''),
(9, 'Kar09', 'Dina', 'Perempuan', 'Menikah', '1999-03-27', 'Jakarta', ''),
(10, 'Kar10', 'Nida', 'Perempuan', 'Menikah', '1995-08-09', 'Bandung', ''),
(11, 'Kar11', 'Dani', 'Laki-laki', 'Menikah', '1996-03-22', 'Jakarta', ''),
(12, 'Kar12', 'Risa', 'Perempuan', 'Belum Menikah', '1998-05-23', 'Meikartu', ''),
(13, 'Kar13', 'Andi', 'Laki-laki', 'Menikah', '1995-04-09', 'Bandung', ''),
(14, 'Kar14', 'Dina', 'Perempuan', 'Menikah', '1999-03-27', 'Jakarta', ''),
(16, 'Kar17', 'Contoh', 'Laki-laki', 'Menikah', '2015-08-13', 'Lohbener', 'Test@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_karyawan`
--
ALTER TABLE `tb_karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_karyawan`
--
ALTER TABLE `tb_karyawan`
  MODIFY `id_karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- Database: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(10) UNSIGNED NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin DEFAULT NULL,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

--
-- Dumping data for table `pma__export_templates`
--

INSERT INTO `pma__export_templates` (`id`, `username`, `export_type`, `template_name`, `template_data`) VALUES
(1, 'root', 'server', 'ppdb_ristek', '{\"quick_or_custom\":\"quick\",\"what\":\"sql\",\"db_select[]\":[\"codeigniter-krs\",\"pegawai\",\"phpmyadmin\",\"ppdb_ristek\",\"test\"],\"aliases_new\":\"\",\"output_format\":\"sendit\",\"filename_template\":\"@SERVER@\",\"remember_template\":\"on\",\"charset\":\"utf-8\",\"compression\":\"none\",\"maxsize\":\"\",\"codegen_structure_or_data\":\"data\",\"codegen_format\":\"0\",\"csv_separator\":\",\",\"csv_enclosed\":\"\\\"\",\"csv_escaped\":\"\\\"\",\"csv_terminated\":\"AUTO\",\"csv_null\":\"NULL\",\"csv_structure_or_data\":\"data\",\"excel_null\":\"NULL\",\"excel_columns\":\"something\",\"excel_edition\":\"win\",\"excel_structure_or_data\":\"data\",\"json_structure_or_data\":\"data\",\"json_unicode\":\"something\",\"latex_caption\":\"something\",\"latex_structure_or_data\":\"structure_and_data\",\"latex_structure_caption\":\"Structure of table @TABLE@\",\"latex_structure_continued_caption\":\"Structure of table @TABLE@ (continued)\",\"latex_structure_label\":\"tab:@TABLE@-structure\",\"latex_relation\":\"something\",\"latex_comments\":\"something\",\"latex_mime\":\"something\",\"latex_columns\":\"something\",\"latex_data_caption\":\"Content of table @TABLE@\",\"latex_data_continued_caption\":\"Content of table @TABLE@ (continued)\",\"latex_data_label\":\"tab:@TABLE@-data\",\"latex_null\":\"\\\\textit{NULL}\",\"mediawiki_structure_or_data\":\"data\",\"mediawiki_caption\":\"something\",\"mediawiki_headers\":\"something\",\"htmlword_structure_or_data\":\"structure_and_data\",\"htmlword_null\":\"NULL\",\"ods_null\":\"NULL\",\"ods_structure_or_data\":\"data\",\"odt_structure_or_data\":\"structure_and_data\",\"odt_relation\":\"something\",\"odt_comments\":\"something\",\"odt_mime\":\"something\",\"odt_columns\":\"something\",\"odt_null\":\"NULL\",\"pdf_report_title\":\"\",\"pdf_structure_or_data\":\"data\",\"phparray_structure_or_data\":\"data\",\"sql_include_comments\":\"something\",\"sql_header_comment\":\"\",\"sql_use_transaction\":\"something\",\"sql_compatibility\":\"NONE\",\"sql_structure_or_data\":\"structure_and_data\",\"sql_create_table\":\"something\",\"sql_auto_increment\":\"something\",\"sql_create_view\":\"something\",\"sql_create_trigger\":\"something\",\"sql_backquotes\":\"something\",\"sql_type\":\"INSERT\",\"sql_insert_syntax\":\"both\",\"sql_max_query_size\":\"50000\",\"sql_hex_for_binary\":\"something\",\"sql_utc_time\":\"something\",\"texytext_structure_or_data\":\"structure_and_data\",\"texytext_null\":\"NULL\",\"yaml_structure_or_data\":\"data\",\"\":null,\"as_separate_files\":null,\"csv_removeCRLF\":null,\"csv_columns\":null,\"excel_removeCRLF\":null,\"json_pretty_print\":null,\"htmlword_columns\":null,\"ods_columns\":null,\"sql_dates\":null,\"sql_relation\":null,\"sql_mime\":null,\"sql_disable_fk\":null,\"sql_views_as_tables\":null,\"sql_metadata\":null,\"sql_drop_database\":null,\"sql_drop_table\":null,\"sql_if_not_exists\":null,\"sql_view_current_user\":null,\"sql_or_replace_view\":null,\"sql_procedure_function\":null,\"sql_truncate\":null,\"sql_delayed\":null,\"sql_ignore\":null,\"texytext_columns\":null}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp(),
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Dumping data for table `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"pegawai\",\"table\":\"tb_karyawan\"},{\"db\":\"pegawai\",\"table\":\"karyawan\"},{\"db\":\"ppdb_ristek\",\"table\":\"tb_pendaftar\"},{\"db\":\"ppdb_ristek\",\"table\":\"tb_siswa\"},{\"db\":\"ppdb_ristek\",\"table\":\"tb_notif\"},{\"db\":\"ppdb_ristek\",\"table\":\"tb_register\"},{\"db\":\"ppdb_ristek\",\"table\":\"tb_pendaftaran\"},{\"db\":\"ppdb_ristek\",\"table\":\"tb_users\"},{\"db\":\"ppdb_ristek\",\"table\":\"tb_jurusan\"},{\"db\":\"ppdb_ristek\",\"table\":\"tb_profile\"}]');

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT 0,
  `x` float UNSIGNED NOT NULL DEFAULT 0,
  `y` float UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin DEFAULT NULL,
  `data_sql` longtext COLLATE utf8_bin DEFAULT NULL,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Dumping data for table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2020-08-14 13:57:21', '{\"Console\\/Mode\":\"collapse\"}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indexes for table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Database: `ppdb_ristek`
--
CREATE DATABASE IF NOT EXISTS `ppdb_ristek` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `ppdb_ristek`;

-- --------------------------------------------------------

--
-- Table structure for table `tb_berita`
--

CREATE TABLE `tb_berita` (
  `id_berita` int(11) NOT NULL,
  `tgl_berita` date NOT NULL,
  `isi_berita` text NOT NULL,
  `penulis_berita` varchar(50) NOT NULL,
  `foto_berita` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_berita`
--

INSERT INTO `tb_berita` (`id_berita`, `tgl_berita`, `isi_berita`, `penulis_berita`, `foto_berita`) VALUES
(3, '2020-07-17', 'Berita Tentang Penerimaan Peserta Didik Baru (PPDB) di SMK Ristek Indramayu dibuka mulai tanggal 13 Juli 2020 ', 'Operator', 'logo_ristek.jpg'),
(7, '2020-06-17', 'Wisuda angkatan ke 3 SMK Ristek Indramayu di adakan pada tanggal 19 November 2019 di Halaman Sekolah Ristek Indramayu', 'Operator', 'logo_ristek1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_daftar_ulang`
--

CREATE TABLE `tb_daftar_ulang` (
  `id_daftar_ulang` int(11) NOT NULL,
  `id_pendaftaran` int(11) NOT NULL,
  `tgl_daftar_ulang` date NOT NULL,
  `ket_daftar_ulang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_fasilitas`
--

CREATE TABLE `tb_fasilitas` (
  `id_fasilitas` int(11) NOT NULL,
  `nama_fasilitas` varchar(100) NOT NULL,
  `deskripsi_fasilitas` text NOT NULL,
  `by_fasilitas` varchar(100) NOT NULL,
  `foto_fasilitas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_fasilitas`
--

INSERT INTO `tb_fasilitas` (`id_fasilitas`, `nama_fasilitas`, `deskripsi_fasilitas`, `by_fasilitas`, `foto_fasilitas`) VALUES
(1, 'Perpustakaan', 'Ruangan Untuk Tempat Siswa Belajar', 'Operator', 'logo_ristek.jpg'),
(2, 'Lab', 'Untuk Praktikum Jurusan MM', 'Operator', 'logo_ristek1.jpg'),
(3, 'Kantin', 'Untuk Istirahat Para Siswa', 'Operator', 'logo_ristek2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_guru`
--

CREATE TABLE `tb_guru` (
  `id_guru` int(11) NOT NULL,
  `nama_guru` varchar(100) NOT NULL,
  `ttl_guru` varchar(100) NOT NULL,
  `nuptk_guru` int(20) NOT NULL,
  `jk_guru` varchar(15) NOT NULL,
  `email_guru` varchar(255) NOT NULL,
  `tmt_guru` varchar(15) NOT NULL,
  `ijazah_guru` varchar(5) NOT NULL,
  `mapel_guru` varchar(100) NOT NULL,
  `alamat_guru` text NOT NULL,
  `foto_guru` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_guru`
--

INSERT INTO `tb_guru` (`id_guru`, `nama_guru`, `ttl_guru`, `nuptk_guru`, `jk_guru`, `email_guru`, `tmt_guru`, `ijazah_guru`, `mapel_guru`, `alamat_guru`, `foto_guru`) VALUES
(39, 'Rachmatilah, S.Pd', 'Bandung, 26 Januari 1972', 2147483647, 'Laki-laki', '-', '2016-2017', 'S1', '-', '-', 'bpk_Rachamtilah.jpg'),
(40, 'Wiwik Wulandari, S.Pd', 'Jakarta, 16 September 1974', 2147483647, 'Perempuan', '-', '2016-2017', 'S1', 'B.INGGRIS/PLH/SBK', '-', 'Users-User-Female-icon.png'),
(41, 'Asep Yogi', 'Tasikmalaya, 17 September 1974', 2147483647, 'Laki-laki', '-', '2016-2017', 'S1', 'PENJASKES', '-', '78-785827_user-profile-avatar-login-account-male-user-icon.png'),
(42, 'Iqbal Hambali, S.Pd', 'Indramayu, 15 Juni 1987', 0, 'Laki-laki', '-', '2016-2017', 'S1', 'PAI/IPS', '-', 'Bpk_Iqbal.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_multimedia`
--

CREATE TABLE `tb_multimedia` (
  `id_multimedia` int(11) NOT NULL,
  `nama_multimedia` varchar(50) NOT NULL,
  `jml_siswa_multimedia` int(50) NOT NULL,
  `motto_multimedia` text NOT NULL,
  `acara_multimedia` text NOT NULL,
  `ketua_multimedia` varchar(100) NOT NULL,
  `logo_multimedia` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_multimedia`
--

INSERT INTO `tb_multimedia` (`id_multimedia`, `nama_multimedia`, `jml_siswa_multimedia`, `motto_multimedia`, `acara_multimedia`, `ketua_multimedia`, `logo_multimedia`) VALUES
(1, 'Multimedia', 57, 'Menjadikan jurusan Multimedia sebagai jurusan yang mampu bersaing secara lokal dan internasional', 'Pembukaan Lab baru untuk Jurusan Multimedia. Dengan adanya ini', 'Sandi Rachmationo, S.Si', 'logo_ristek2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_notif`
--

CREATE TABLE `tb_notif` (
  `id_notif` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `id_register` int(11) NOT NULL,
  `flag` int(11) NOT NULL,
  `message` text NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_notif`
--

INSERT INTO `tb_notif` (`id_notif`, `id_users`, `id_register`, `flag`, `message`, `date_created`) VALUES
(2, 2, 9, 1, 'Selamat Anda Sudah Menjadi Siswa Di SMK RISTEK Indramayu', 1596561668),
(3, 2, 0, 0, 'Selamat Anda Sudah Menjadi Siswa Di SMK RISTEK Indramayu, Cetak Bukti Pendaftaran', 1597223691),
(4, 2, 12, 0, 'Selamat Anda Sudah Menjadi Siswa Di SMK RISTEK Indramayu, Cetak Bukti Pendaftaran', 1597224479),
(5, 2, 12, 0, 'Mohon Maaf Anda Belum Dapat Menjadi Siswa Di SMK RISTEK Indramayu', 1597227858),
(6, 2, 13, 0, 'Mohon Maaf Anda Belum Dapat Menjadi Siswa Di SMK RISTEK Indramayu', 1597228414),
(7, 2, 14, 0, 'Mohon Maaf Anda Belum Dapat Menjadi Siswa Di SMK RISTEK Indramayu', 1597228912);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pendaftar`
--

CREATE TABLE `tb_pendaftar` (
  `id_pendaftar` int(11) NOT NULL,
  `jurusan_pendaftar` varchar(50) NOT NULL,
  `nik_pendaftar` int(20) NOT NULL,
  `skhun_pendaftar` int(20) NOT NULL,
  `nama_pendaftar` varchar(100) NOT NULL,
  `jk_pendaftar` varchar(10) NOT NULL,
  `ttl_pendaftar` text NOT NULL,
  `almt_jl_pendaftar` text NOT NULL,
  `almt_desa_pendaftar` text NOT NULL,
  `almt_rt_rw_pendaftar` text NOT NULL,
  `almt_kec_pendaftar` text NOT NULL,
  `almt_kab_pendaftar` text NOT NULL,
  `telp_hp_pendaftar` int(15) NOT NULL,
  `asal_sekolah_pendaftar` varchar(100) NOT NULL,
  `no_ijazah_pendaftar` int(20) NOT NULL,
  `thn_lulus_pendaftar` int(50) NOT NULL,
  `nama_ayah_pendaftar` varchar(100) NOT NULL,
  `nama_ibu_pendaftar` varchar(100) NOT NULL,
  `prj_orang_tua_pendaftar` text NOT NULL,
  `ppn_orang_tua_pendaftar` text NOT NULL,
  `pendidikan_orang_tua_pendaftar` varchar(10) NOT NULL,
  `almt_jl_orang_tua_pendaftar` text NOT NULL,
  `almt_desa_orang_tua_pendaftar` text NOT NULL,
  `almt_rt_rw_orang_tua_pendaftar` text NOT NULL,
  `almt_kec_orang_tua_pendaftar` text NOT NULL,
  `almt_kab_orang_tua_pendaftar` text NOT NULL,
  `telp_hp_orang_tua_pendaftar` int(15) NOT NULL,
  `file_kk_pendaftar` text NOT NULL,
  `file_akte_pendaftar` text NOT NULL,
  `file_ktp_orang_tua_pendaftar` text NOT NULL,
  `file_ijazah_pendaftar` text NOT NULL,
  `file_skhun_pendaftar` text NOT NULL,
  `file_sktm_pendaftar` text NOT NULL,
  `id_register` int(11) NOT NULL,
  `status_pendaftar` int(1) NOT NULL,
  `date_created` int(11) NOT NULL,
  `date_updated` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pendaftar`
--

INSERT INTO `tb_pendaftar` (`id_pendaftar`, `jurusan_pendaftar`, `nik_pendaftar`, `skhun_pendaftar`, `nama_pendaftar`, `jk_pendaftar`, `ttl_pendaftar`, `almt_jl_pendaftar`, `almt_desa_pendaftar`, `almt_rt_rw_pendaftar`, `almt_kec_pendaftar`, `almt_kab_pendaftar`, `telp_hp_pendaftar`, `asal_sekolah_pendaftar`, `no_ijazah_pendaftar`, `thn_lulus_pendaftar`, `nama_ayah_pendaftar`, `nama_ibu_pendaftar`, `prj_orang_tua_pendaftar`, `ppn_orang_tua_pendaftar`, `pendidikan_orang_tua_pendaftar`, `almt_jl_orang_tua_pendaftar`, `almt_desa_orang_tua_pendaftar`, `almt_rt_rw_orang_tua_pendaftar`, `almt_kec_orang_tua_pendaftar`, `almt_kab_orang_tua_pendaftar`, `telp_hp_orang_tua_pendaftar`, `file_kk_pendaftar`, `file_akte_pendaftar`, `file_ktp_orang_tua_pendaftar`, `file_ijazah_pendaftar`, `file_skhun_pendaftar`, `file_sktm_pendaftar`, `id_register`, `status_pendaftar`, `date_created`, `date_updated`) VALUES
(15, 'Multimedia', 123, 1234, 'Hariz', 'Laki-Laki', 'Indramayu 05 Agustus 1999', 'Weluntas', 'Lelea', '01/02', 'Lelea', 'Indramayu', 2147483647, 'SMPN 1 Lelea', 12345, 2014, 'Bapake', 'Ibuke', 'PNS', 'Di Atas Rp.2 Jt', 'S1', 'Weluntas', 'Lelea', '01/02', 'Lelea', 'Indramayu', 8971918, '123.jpg', '123.jpg', '123.jpg', '123.jpg', '123.jpg', '123.jpg', 9, 1, 1596561668, 0),
(20, 'Multimedia', 123456789, 111111, 'Priliyandi', 'Laki-Laki', 'Indramayu 05 Agustus 1999', 'Gang Intan', 'Sukasari', '14/03', 'Sliyeg', 'Indramayu', 2147483647, 'SMPN 1 Sliyeg', 11111, 2014, 'Bapake', 'Ibuke', 'Pengusaha', 'Di Atas Rp.2 Jt', 'SMK', 'Gang Intan', 'Sukasari', '14/03', 'Sliyeg', 'Indramayu', 891271291, '123456789.jpg', '123456789.jpg', '123456789.jpg', '123456789.jpg', '123456789.jpg', '123456789.jpg', 14, 2, 1597228912, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pendaftaran`
--

CREATE TABLE `tb_pendaftaran` (
  `id_pendaftaran` int(11) NOT NULL,
  `tahun_pendaftaran` int(13) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `kuota_pendaftaran` int(13) NOT NULL,
  `deskripsi_pendaftaran` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_perbank`
--

CREATE TABLE `tb_perbank` (
  `id_perbank` int(11) NOT NULL,
  `nama_perbank` varchar(50) NOT NULL,
  `jml_siswa_perbank` int(50) NOT NULL,
  `motto_perbank` text NOT NULL,
  `acara_perbank` text NOT NULL,
  `ketua_perbank` varchar(50) NOT NULL,
  `logo_perbank` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_perbank`
--

INSERT INTO `tb_perbank` (`id_perbank`, `nama_perbank`, `jml_siswa_perbank`, `motto_perbank`, `acara_perbank`, `ketua_perbank`, `logo_perbank`) VALUES
(1, 'Perbankan', 0, '--', 'Mohon maaf untuk jurusan Perbankan belum dibuka. Mohon bersabar ini ujian bagi kita semua semoga bisa disecapatnya diwujudkan V2', '--', 'logo_ristek.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_profile`
--

CREATE TABLE `tb_profile` (
  `id_profile` int(11) NOT NULL,
  `nama_profile` varchar(100) NOT NULL,
  `tentang_profile` text NOT NULL,
  `by_profile` varchar(50) NOT NULL,
  `foto_profile` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_profile`
--

INSERT INTO `tb_profile` (`id_profile`, `nama_profile`, `tentang_profile`, `by_profile`, `foto_profile`) VALUES
(1, 'SMK RISTEK Indramayu', 'SMK RISTEK Indramayu merupakan sekolah swasta yang memiliki akreditasi C. Beralamat di Desa Pemayahan, Kec. Lohbener, Kab. Indramayu. Since Agustus 2016. memiliki 2 jurusan. Alhamdulillah', 'Operator', 'logo_ristek1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_register`
--

CREATE TABLE `tb_register` (
  `id_register` int(11) NOT NULL,
  `nama_register` varchar(100) NOT NULL,
  `username_register` text NOT NULL,
  `email_register` varchar(100) NOT NULL,
  `telp_register` varchar(15) NOT NULL,
  `password_register` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_register`
--

INSERT INTO `tb_register` (`id_register`, `nama_register`, `username_register`, `email_register`, `telp_register`, `password_register`) VALUES
(9, 'naufal', 'naufalnv21', 'ggnaufal21@gmail.com', '085412145', 'barulagi123'),
(10, 'Hariz', 'Hariz', 'fanyfahrurozi@gmail.com', '0896452826', 'SmkGZAh6dHXa7pj2CuFreELyW0g4wqfKIvBlMbQiUDORtxYnTP'),
(14, 'Priliyandi', 'Prili', 'prilyandi22@gmail.com', '08956543785', 'prili');

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id_siswa` int(11) NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `jk_siswa` varchar(10) NOT NULL,
  `kelas_siswa` varchar(5) NOT NULL,
  `jurusan_siswa` varchar(20) NOT NULL,
  `telp_siswa` varchar(20) NOT NULL,
  `alamat_siswa` text NOT NULL,
  `foto_siswa` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`id_siswa`, `nama_siswa`, `jk_siswa`, `kelas_siswa`, `jurusan_siswa`, `telp_siswa`, `alamat_siswa`, `foto_siswa`) VALUES
(10, 'Anisah', 'Perempuan', '10', 'Multimedia', '0877-2488-8424', '-', 'Users-User-Female-icon16.png'),
(11, 'Bella Safitri', 'Perempuan', '10', 'Multimedia', '', '-', 'Users-User-Female-icon1.png'),
(12, 'Deri Eryana', 'Laki-laki', '10', 'Multimedia', '', '-', '78-785827_user-profile-avatar-login-account-male-user-icon.png'),
(13, 'Dewi Nengsih', 'Perempuan', '10', 'Multimedia', '', '-', 'Users-User-Female-icon2.png'),
(15, 'Edi Nugraha', 'Laki-laki', '10', 'Multimedia', '', '-', '78-785827_user-profile-avatar-login-account-male-user-icon1.png'),
(16, 'Heryandi', 'Laki-laki', '10', 'Multimedia', '', '-', '78-785827_user-profile-avatar-login-account-male-user-icon2.png'),
(17, 'Iskandar Hanafi', 'Laki-laki', '10', 'Multimedia', '', '-', '78-785827_user-profile-avatar-login-account-male-user-icon3.png'),
(18, 'Juhan Dana', 'Laki-laki', '10', 'Multimedia', '', '-', '78-785827_user-profile-avatar-login-account-male-user-icon4.png'),
(19, 'Karlinah', 'Perempuan', '10', 'Multimedia', '', '-', 'Users-User-Female-icon3.png'),
(20, 'Lastri', 'Perempuan', '10', 'Multimedia', '', '-', 'Users-User-Female-icon4.png'),
(21, 'Lis Monica', 'Perempuan', '10', 'Multimedia', '', '-', 'Users-User-Female-icon5.png'),
(22, 'Rio Saputra', 'Laki-laki', '10', 'Multimedia', '', '-', 'Users-User-Female-icon6.png'),
(23, 'Sindi Fitriani', 'Perempuan', '10', 'Multimedia', '', '-', 'Users-User-Female-icon7.png'),
(24, 'Suryaman', 'Laki-laki', '10', 'Multimedia', '', '-', '78-785827_user-profile-avatar-login-account-male-user-icon5.png'),
(25, 'Tri Wahyuni', 'Perempuan', '10', 'Multimedia', '', '-', 'Users-User-Female-icon8.png'),
(26, 'Walhikmah', 'Perempuan', '10', 'Multimedia', '', '-', 'Users-User-Female-icon9.png'),
(27, 'Woggi Susilo', 'Laki-laki', '10', 'Multimedia', '', '-', '78-785827_user-profile-avatar-login-account-male-user-icon6.png'),
(28, 'Ahmad Dani', 'Laki-laki', '11', 'Multimedia', '', '-', '78-785827_user-profile-avatar-login-account-male-user-icon7.png'),
(29, 'Andre Maulana', 'Laki-laki', '11', 'Multimedia', '', '-', '78-785827_user-profile-avatar-login-account-male-user-icon8.png'),
(30, 'Daniel Michael', 'Laki-laki', '11', 'Multimedia', '', '-', '78-785827_user-profile-avatar-login-account-male-user-icon9.png'),
(31, 'Dede Jemes', 'Laki-laki', '11', 'Multimedia', '', '-', '78-785827_user-profile-avatar-login-account-male-user-icon10.png'),
(32, 'Farhan M.', 'Laki-laki', '11', 'Multimedia', '', '-', '78-785827_user-profile-avatar-login-account-male-user-icon11.png'),
(33, 'Hafid Ridoni', 'Laki-laki', '11', 'Multimedia', '', '-', '78-785827_user-profile-avatar-login-account-male-user-icon12.png'),
(34, 'Haikal', 'Laki-laki', '11', 'Multimedia', '', '-', '78-785827_user-profile-avatar-login-account-male-user-icon13.png'),
(35, 'Hanan Riyani', 'Laki-laki', '11', 'Multimedia', '', '-', '78-785827_user-profile-avatar-login-account-male-user-icon14.png'),
(36, 'Haris Silvian', 'Laki-laki', '11', 'Multimedia', '', '-', '78-785827_user-profile-avatar-login-account-male-user-icon15.png'),
(37, 'M. Indra Gunawan', 'Laki-laki', '11', 'Multimedia', '', '-', '78-785827_user-profile-avatar-login-account-male-user-icon16.png'),
(38, 'Manan Alviyan', 'Laki-laki', '11', 'Multimedia', '', '-', '78-785827_user-profile-avatar-login-account-male-user-icon17.png'),
(39, 'Maulana Alim', 'Laki-laki', '11', 'Multimedia', '', '-', '78-785827_user-profile-avatar-login-account-male-user-icon19.png'),
(40, 'Moh. Faisal', 'Laki-laki', '11', 'Multimedia', '', '-', '78-785827_user-profile-avatar-login-account-male-user-icon20.png'),
(41, 'Nanang Ahmad S.', 'Laki-laki', '11', 'Multimedia', '', '-', '78-785827_user-profile-avatar-login-account-male-user-icon21.png'),
(42, 'Novri Andikho', 'Laki-laki', '11', 'Multimedia', '', '-', '78-785827_user-profile-avatar-login-account-male-user-icon22.png'),
(43, 'Rahayu', 'Perempuan', '11', 'Multimedia', '', '-', 'Users-User-Female-icon10.png'),
(44, 'Rio Noviasya', 'Laki-laki', '11', 'Multimedia', '', '-', '78-785827_user-profile-avatar-login-account-male-user-icon24.png'),
(45, 'Risnanto', 'Laki-laki', '11', 'Multimedia', '', '-', '78-785827_user-profile-avatar-login-account-male-user-icon25.png'),
(46, 'Rusayep Maulana', 'Laki-laki', '11', 'Multimedia', '', '-', '78-785827_user-profile-avatar-login-account-male-user-icon27.png'),
(47, 'Siska', 'Perempuan', '11', 'Multimedia', '', '-', 'Users-User-Female-icon11.png'),
(48, 'Sutriyatno', 'Laki-laki', '11', 'Multimedia', '', '-', '78-785827_user-profile-avatar-login-account-male-user-icon29.png'),
(49, 'Tariman', 'Laki-laki', '11', 'Multimedia', '', '-', '78-785827_user-profile-avatar-login-account-male-user-icon30.png'),
(50, 'Taslikin', 'Laki-laki', '11', 'Multimedia', '', '-', '78-785827_user-profile-avatar-login-account-male-user-icon31.png'),
(51, 'Tia Santika', 'Perempuan', '11', 'Multimedia', '', '-', 'Users-User-Female-icon12.png'),
(52, 'Ulfatun Fauziyah', 'Perempuan', '11', 'Multimedia', '', '-', 'Users-User-Female-icon13.png'),
(53, 'Willy Hidayat', 'Laki-laki', '11', 'Multimedia', '', '-', '78-785827_user-profile-avatar-login-account-male-user-icon32.png'),
(54, 'M. Nur Al- Amin', 'Laki-laki', '11', 'Multimedia', '', '-', '78-785827_user-profile-avatar-login-account-male-user-icon33.png'),
(55, 'Mediana', 'Laki-laki', '11', 'Multimedia', '', '-', '78-785827_user-profile-avatar-login-account-male-user-icon34.png'),
(56, 'Riki Wiliyan', 'Laki-laki', '11', 'Multimedia', '', '-', '78-785827_user-profile-avatar-login-account-male-user-icon35.png'),
(57, 'Ade Faiz H', 'Laki-laki', '12', 'Multimedia', '', '-', '78-785827_user-profile-avatar-login-account-male-user-icon36.png'),
(58, 'Ani Muamalah', 'Perempuan', '12', 'Multimedia', '', '-', '78-785827_user-profile-avatar-login-account-male-user-icon37.png'),
(59, 'Ayu Wandira', 'Perempuan', '12', 'Multimedia', '', '-', '78-785827_user-profile-avatar-login-account-male-user-icon38.png'),
(60, 'Darminih', 'Perempuan', '12', 'Multimedia', '', '-', '78-785827_user-profile-avatar-login-account-male-user-icon39.png'),
(61, 'Fajar Maulana', 'Laki-laki', '12', 'Multimedia', '', '-', '78-785827_user-profile-avatar-login-account-male-user-icon40.png'),
(62, 'Nur Halim', 'Laki-laki', '12', 'Multimedia', '', '-', '78-785827_user-profile-avatar-login-account-male-user-icon41.png'),
(63, 'Nur Kholid', 'Laki-laki', '12', 'Multimedia', '', '-', '78-785827_user-profile-avatar-login-account-male-user-icon42.png'),
(64, 'Rini Triutami', 'Perempuan', '12', 'Multimedia', '', '-', '78-785827_user-profile-avatar-login-account-male-user-icon43.png'),
(65, 'Septian Karmadi', 'Laki-laki', '12', 'Multimedia', '', '-', '78-785827_user-profile-avatar-login-account-male-user-icon44.png'),
(66, 'Saminih', 'Perempuan', '12', 'Multimedia', '', '-', '78-785827_user-profile-avatar-login-account-male-user-icon45.png'),
(67, 'Sopiyah', 'Perempuan', '12', 'Multimedia', '', '-', '78-785827_user-profile-avatar-login-account-male-user-icon46.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE `tb_users` (
  `id_users` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `ttl_users` varchar(100) NOT NULL,
  `nuptk_users` text NOT NULL,
  `jk_users` varchar(15) NOT NULL,
  `tmt_users` varchar(15) NOT NULL,
  `ijazah_users` varchar(15) NOT NULL,
  `mapel_users` varchar(100) NOT NULL,
  `password_users` text NOT NULL,
  `telp_users` varchar(15) NOT NULL,
  `level_users` int(3) NOT NULL,
  `alamat_users` text NOT NULL,
  `email_users` varchar(255) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `active_id` int(1) NOT NULL,
  `id_register` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_users`
--

INSERT INTO `tb_users` (`id_users`, `username`, `ttl_users`, `nuptk_users`, `jk_users`, `tmt_users`, `ijazah_users`, `mapel_users`, `password_users`, `telp_users`, `level_users`, `alamat_users`, `email_users`, `created_at`, `updated_at`, `active_id`, `id_register`) VALUES
(1, 'rachmatilah', 'bandung 26 januari 1972', '1458750650200002', 'laki-laki', '2016-2017', 'S1', 'Kepala Sekolah', '$2y$10$O5ptO5ZegZr3IUIwB09mL.Z8R0FE9cYXzHjdShQelH3bkKDeqQzAq', '087321806274', 1, 'Perumahan Sindang Griya Indramayu', '', '2020-06-04', '0000-00-00', 1, 0),
(2, 'sandi rachmationo', 'Indramayu 22 Juni 1988', '3954766666120002', 'Laki-laki', '2016-2017', 'S1', 'Produktif', '$2y$10$Y5dOok4PLwHSoHoSE3.CZeRh1h5EeDwA7A6.FtjT6zhK6xnLGTsy2', '', 2, '', '', '2020-06-18', '0000-00-00', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `tb_daftar_ulang`
--
ALTER TABLE `tb_daftar_ulang`
  ADD PRIMARY KEY (`id_daftar_ulang`);

--
-- Indexes for table `tb_fasilitas`
--
ALTER TABLE `tb_fasilitas`
  ADD PRIMARY KEY (`id_fasilitas`);

--
-- Indexes for table `tb_guru`
--
ALTER TABLE `tb_guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `tb_multimedia`
--
ALTER TABLE `tb_multimedia`
  ADD PRIMARY KEY (`id_multimedia`);

--
-- Indexes for table `tb_notif`
--
ALTER TABLE `tb_notif`
  ADD PRIMARY KEY (`id_notif`);

--
-- Indexes for table `tb_pendaftar`
--
ALTER TABLE `tb_pendaftar`
  ADD PRIMARY KEY (`id_pendaftar`);

--
-- Indexes for table `tb_pendaftaran`
--
ALTER TABLE `tb_pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`);

--
-- Indexes for table `tb_perbank`
--
ALTER TABLE `tb_perbank`
  ADD PRIMARY KEY (`id_perbank`);

--
-- Indexes for table `tb_profile`
--
ALTER TABLE `tb_profile`
  ADD PRIMARY KEY (`id_profile`);

--
-- Indexes for table `tb_register`
--
ALTER TABLE `tb_register`
  ADD PRIMARY KEY (`id_register`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_berita`
--
ALTER TABLE `tb_berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tb_daftar_ulang`
--
ALTER TABLE `tb_daftar_ulang`
  MODIFY `id_daftar_ulang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_fasilitas`
--
ALTER TABLE `tb_fasilitas`
  MODIFY `id_fasilitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_guru`
--
ALTER TABLE `tb_guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `tb_multimedia`
--
ALTER TABLE `tb_multimedia`
  MODIFY `id_multimedia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_notif`
--
ALTER TABLE `tb_notif`
  MODIFY `id_notif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_pendaftar`
--
ALTER TABLE `tb_pendaftar`
  MODIFY `id_pendaftar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tb_pendaftaran`
--
ALTER TABLE `tb_pendaftaran`
  MODIFY `id_pendaftaran` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_perbank`
--
ALTER TABLE `tb_perbank`
  MODIFY `id_perbank` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_profile`
--
ALTER TABLE `tb_profile`
  MODIFY `id_profile` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_register`
--
ALTER TABLE `tb_register`
  MODIFY `id_register` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
