
CREATE TABLE `surat_jalan` (
  `id` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `no_telepon` varchar(50) NOT NULL,
  `biaya_edit` int(11) NOT NULL DEFAULT '0',
  `biaya_setting` int(11) NOT NULL DEFAULT '0',
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `operator` int(11) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `surat_jalan`
--
ALTER TABLE `surat_jalan`
  ADD PRIMARY KEY (`id`);
COMMIT;

ALTER TABLE `surat_jalan` CHANGE `biaya_edit` `biaya_edit` INT(11) NULL DEFAULT '0', CHANGE `biaya_setting` `biaya_setting` INT(11) NULL DEFAULT '0';