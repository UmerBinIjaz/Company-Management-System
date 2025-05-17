--
-- Database: `bic_cms`
--
CREATE DATABASE IF NOT EXISTS `bic_cms` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bic_cms`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `datetime` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL,
  `aname` varchar(30) NOT NULL,
  `addedby` varchar(30) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `aimage` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `datetime`, `username`, `password`, `aname`, `addedby`, `Email`, `aimage`) VALUES
(7, 'June-19-2022 11:42:58', 'admin', 'admin', 'admin', 'admin', 'adminc@qau.edu.pk', '');
-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) NOT NULL,
  `title` varchar(50) NOT NULL,
  `author` varchar(50) NOT NULL,
  `datetime` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `title`, `author`, `datetime`) VALUES
(15, 'Business Ideas Competition', 'admin', 'June-19-2022 11:44:40'),
(16, 'Digital Products', 'admin', 'June-19-2022 11:44:49'),
(17, 'Science & Technology', 'admin', 'June-19-2022 11:45:03'),
(18, 'Training & Workshops', 'admin', 'June-19-2022 11:45:18');

-- --------------------------------------------------------

--
-- Table structure for table `inccategory`
--

CREATE TABLE `inccategory` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `shortform` varchar(20) NOT NULL,
  `author` varchar(50) NOT NULL,
  `datetime` varchar(50) NOT NULL,
  `eligibility` varchar(60) NOT NULL,
  `salary` varchar(60) NOT NULL,
  `joblocation` varchar(60) NOT NULL,
  `vacancy` varchar(60) NOT NULL,
  `Job` varchar(60) NOT NULL,
  `lastdate` varchar(60) NOT NULL,
  `expreq` varchar(60) NOT NULL,
  `jobdecs` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inccategory`
--

INSERT INTO `inccategory` (`id`, `title`, `shortform`, `author`, `datetime`, `eligibility`, `salary`, `joblocation`, `vacancy`, `Job`, `lastdate`, `expreq`, `jobdecs`) VALUES
(1, 'IT Programmer', 'DEV', 'admin', 'August-07-2022 10:15:15', '16 Year Education', '27000', 'QAU, Islamabad', '1', 'Part Time', '20 OCT 2022', '1 Year Experience in Software House', '<h4><strong>Overview</strong></h4>\r\n\r\n<p>As a Product Designer, you will work within a Product Delivery Team fused with UX, engineering, product and data talent. You will help the team design beautiful interfaces that solve business challenges for our clients. We work with a number of Tier 1 banks on building web-based applications for AML, KYC and Sanctions List management workflows. This role is ideal if you are looking to segue your career into the FinTech or Big Data arenas.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h4><strong>Responsabilities</strong></h4>\r\n\r\n<ul>\r\n	<li>Be involved in every step of the product design cycle from discovery to developer handoff and user acceptance testing.</li>\r\n	<li>Work with BAs, product managers and tech teams to lead the Product Design</li>\r\n	<li>Maintain quality of the design process and ensure that when designs are translated into code they accurately reflect the design specifications.</li>\r\n	<li>Accurately estimate design tickets during planning sessions.</li>\r\n	<li>Contribute to sketching sessions involving non-designersCreate, iterate and maintain UI deliverables including sketch files, style guides, high fidelity prototypes, micro interaction specifications and pattern libraries.</li>\r\n	<li>Ensure design choices are data led by identifying assumptions to test each sprint, and work with the analysts in your team to plan moderated usability test sessions.</li>\r\n	<li>Design pixel perfect responsive UI&rsquo;s and understand that adopting common interface patterns is better for UX than reinventing the wheel</li>\r\n	<li>Present your work to the wider business at Show &amp; Tell sessions.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h4><strong>Skills</strong></h4>\r\n\r\n<ul>\r\n	<li>Programming experience developing web applications with the Microsoft .NET stack and a basic knowledge of SQL</li>\r\n	<li>Development experience with Angular, Node.JS, or ColdFusion</li>\r\n	<li>HTML, CSS, XHTML, XML</li>\r\n	<li>Hypervisors, SAN&rsquo;s, load balancers, firewalls, and Web Application Firewall (WAF)</li>\r\n	<li>Experience with Higher Logic (a collaboration platform)</li>\r\n	<li>MongoDB, Drupal</li>\r\n	<li>Mobile App Development (iOS and Android)</li>\r\n	<li>Episerver CMS</li>\r\n	<li>Microsoft Team Foundation Server</li>\r\n	<li>Speaker Management System (Planstone)</li>\r\n</ul>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `incubates`
--

CREATE TABLE `incubates` (
  `id` int(10) NOT NULL,
  `incubatename` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `incubatenumber` varchar(50) NOT NULL,
  `incubateCategory` varchar(60) NOT NULL,
  `incubatefile` varchar(1000) NOT NULL,
  `incubatedesc` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `incubates`
--

INSERT INTO `incubates` (`id`, `incubatename`, `email`, `incubatenumber`, `incubateCategory`, `incubatefile`, `incubatedesc`) VALUES
(5, 'Umer Bin Ijaz', 'uk302269@gmail.com', '03135081401', 'IT Programmer', 'CV 1.pdf', 'Hi I am Umer Bin Ijaz. I am Student of Qau. I recently Completed my BSC Exams From QAU. And Now i want to improve my skills. So that\'s why i am applying for this job. Thanks! ');

-- --------------------------------------------------------

--
-- Table structure for table `intcategory`
--

CREATE TABLE `intcategory` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `shortform` varchar(20) NOT NULL,
  `author` varchar(50) NOT NULL,
  `datetime` varchar(50) NOT NULL,
  `eligibility` varchar(60) NOT NULL,
  `salary` varchar(60) NOT NULL,
  `joblocation` varchar(60) NOT NULL,
  `vacancy` varchar(60) NOT NULL,
  `Job` varchar(60) NOT NULL,
  `lastdate` varchar(60) NOT NULL,
  `expreq` varchar(60) NOT NULL,
  `jobdecs` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `intcategory`
--

INSERT INTO `intcategory` (`id`, `title`, `shortform`, `author`, `datetime`, `eligibility`, `salary`, `joblocation`, `vacancy`, `Job`, `lastdate`, `expreq`, `jobdecs`) VALUES
(4, 'IT Programmer', 'DEV', 'admin', 'July-23-2022 12:19:15', '16 Year Education', '27000', 'QAU, Islamabad', '1', 'Part Time', '20 OCT 2022', '1 Year Experience in Software House', '<h4><strong>Overview</strong></h4>\r\n\r\n<p>As a Product Designer, you will work within a Product Delivery Team fused with UX, engineering, product and data talent. You will help the team design beautiful interfaces that solve business challenges for our clients. We work with a number of Tier 1 banks on building web-based applications for AML, KYC and Sanctions List management workflows. This role is ideal if you are looking to segue your career into the FinTech or Big Data arenas.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h4><strong>Responsabilities</strong></h4>\r\n\r\n<ul>\r\n	<li>Be involved in every step of the product design cycle from discovery to developer handoff and user acceptance testing.</li>\r\n	<li>Work with BAs, product managers and tech teams to lead the Product Design</li>\r\n	<li>Maintain quality of the design process and ensure that when designs are translated into code they accurately reflect the design specifications.</li>\r\n	<li>Accurately estimate design tickets during planning sessions.</li>\r\n	<li>Contribute to sketching sessions involving non-designersCreate, iterate and maintain UI deliverables including sketch files, style guides, high fidelity prototypes, micro interaction specifications and pattern libraries.</li>\r\n	<li>Ensure design choices are data led by identifying assumptions to test each sprint, and work with the analysts in your team to plan moderated usability test sessions.</li>\r\n	<li>Design pixel perfect responsive UI&rsquo;s and understand that adopting common interface patterns is better for UX than reinventing the wheel</li>\r\n	<li>Present your work to the wider business at Show &amp; Tell sessions.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h4><strong>Skills</strong></h4>\r\n\r\n<ul>\r\n	<li>Programming experience developing web applications with the Microsoft .NET stack and a basic knowledge of SQL</li>\r\n	<li>Development experience with Angular, Node.JS, or ColdFusion</li>\r\n	<li>HTML, CSS, XHTML, XML</li>\r\n	<li>Hypervisors, SAN&rsquo;s, load balancers, firewalls, and Web Application Firewall (WAF)</li>\r\n	<li>Experience with Higher Logic (a collaboration platform)</li>\r\n	<li>MongoDB, Drupal</li>\r\n	<li>Mobile App Development (iOS and Android)</li>\r\n	<li>Episerver CMS</li>\r\n	<li>Microsoft Team Foundation Server</li>\r\n	<li>Speaker Management System (Planstone)</li>\r\n</ul>\r\n'),
(5, 'Graphic designing', 'GD', 'admin', 'July-23-2022 16:27:25', '16 Year Education', '27000', 'QAU, Islamabad', '1', 'Part Time', '20 OCT 2022', '1 Year Experience in Graphic Design', '<h4><strong>Overview</strong></h4>\r\n\r\n<p>As a Product Designer, you will work within a Product Delivery Team fused with UX, engineering, product and data talent. You will help the team design beautiful interfaces that solve business challenges for our clients. We work with a number of Tier 1 banks on building web-based applications for AML, KYC and Sanctions List management workflows. This role is ideal if you are looking to segue your career into the FinTech or Big Data arenas.</p>\r\n\r\n<h4><strong>Responsabilities</strong></h4>\r\n\r\n<ul>\r\n	<li>Be involved in every step of the product design cycle from discovery to developer handoff and user acceptance testing.</li>\r\n	<li>Work with BAs, product managers and tech teams to lead the Product Design</li>\r\n	<li>Maintain quality of the design process and ensure that when designs are translated into code they accurately reflect the design specifications.</li>\r\n	<li>Accurately estimate design tickets during planning sessions.</li>\r\n	<li>Contribute to sketching sessions involving non-designersCreate, iterate and maintain UI deliverables including sketch files, style guides, high fidelity prototypes, micro interaction specifications and pattern libraries.</li>\r\n	<li>Ensure design choices are data led by identifying assumptions to test each sprint, and work with the analysts in your team to plan moderated usability test sessions.</li>\r\n	<li>Design pixel perfect responsive UI&rsquo;s and understand that adopting common interface patterns is better for UX than reinventing the wheel</li>\r\n	<li>Present your work to the wider business at Show &amp; Tell sessions.</li>\r\n</ul>\r\n\r\n<h4><strong>Skills</strong></h4>\r\n\r\n<ul>\r\n	<li>Programming experience developing web applications with the Microsoft .NET stack and a basic knowledge of SQL</li>\r\n	<li>Development experience with Angular, Node.JS, or ColdFusion</li>\r\n	<li>HTML, CSS, XHTML, XML</li>\r\n	<li>Hypervisors, SAN&rsquo;s, load balancers, firewalls, and Web Application Firewall (WAF)</li>\r\n	<li>Experience with Higher Logic (a collaboration platform)</li>\r\n	<li>MongoDB, Drupal</li>\r\n	<li>Mobile App Development (iOS and Android)</li>\r\n	<li>Episerver CMS</li>\r\n	<li>Microsoft Team Foundation Server</li>\r\n	<li>Speaker Management System (Planstone)</li>\r\n</ul>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `interness`
--

CREATE TABLE `interness` (
  `id` int(10) NOT NULL,
  `interneename` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `interneenumber` varchar(50) NOT NULL,
  `interneeCategory` varchar(60) NOT NULL,
  `interneefile` varchar(1000) NOT NULL,
  `interneedesc` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `interness`
--

INSERT INTO `interness` (`id`, `interneename`, `email`, `interneenumber`, `interneeCategory`, `interneefile`, `interneedesc`) VALUES
(20, 'Umer', 'uk302269@gmail.com', '03135081401', 'IT Programmer', 'Application for displaying.pdf', 'aaaaaaaaaaaaassssssssssssssssssssss');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) NOT NULL,
  `datetime` varchar(50) NOT NULL,
  `title` varchar(300) NOT NULL,
  `category` varchar(50) NOT NULL,
  `author` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `post` varchar(50000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `datetime`, `title`, `category`, `author`, `image`, `post`) VALUES
(6, 'June-19-2022 11:47:31', 'Forth position out of 10 in IOBM and win 0.5 million PKR', 'Business Ideas Competition', 'admin', '1st.jpg', '<p><strong>Lorem ipsum gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus .</strong></p>\r\n\r\n<p>Lorem ipsum gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus .</p>\r\n'),
(7, 'June-19-2022 11:49:27', '1st Position out of 90 and win 0.1 millions PK', 'Business Ideas Competition', 'admin', '3.jpeg', '<p><strong>Lorem ipsum gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus</strong></p>\r\n\r\n<p>Lorem ipsum gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus</p>\r\n\r\n<p>Lorem ipsum gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `id` int(10) NOT NULL,
  `SubCategoryTitle` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `author` varchar(50) NOT NULL,
  `datetime` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`id`, `SubCategoryTitle`, `category`, `author`, `datetime`) VALUES
(1, 'enginner', 'Politics', '', 'June-06-2022 02:38:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inccategory`
--
ALTER TABLE `inccategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `incubates`
--
ALTER TABLE `incubates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `intcategory`
--
ALTER TABLE `intcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `interness`
--
ALTER TABLE `interness`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `inccategory`
--
ALTER TABLE `inccategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `incubates`
--
ALTER TABLE `incubates`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `intcategory`
--
ALTER TABLE `intcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `interness`
--
ALTER TABLE `interness`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--