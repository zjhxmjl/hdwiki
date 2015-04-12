<?PHP
/**
 * common
 */
$lang['zh'] = 'Simplified Chinese';
$lang['en'] = 'English';
$lang['tw'] = '繁体中文';
$lang['commonInstallTitle'] = 'HDWiki SetUp';
$lang['commonDBCharset'] = 'utf8';
$lang['commonCharset'] = 'UTF-8';
$lang['commonSetupLanguage'] = 'Installation language';
$lang['commonSetupNavigate'] = 'install navigation';
$lang['commonPrevStep'] = 'Back';
$lang['commonNextStep'] = 'Next';
$lang['commonHelp'] = 'help';
$lang['commonOS'] = 'Operating System';
$lang['commonVersion'] = 'version';
$lang['commonAttachUpload'] = 'Attachment Upload';
$lang['commonDiskSpace'] = 'Disk Space';
$lang['commonConfigRequire'] = 'Desired Configuration';
$lang['commonConfigOptimized'] = 'Best Configuration';
$lang['commonConfigCurrent'] = 'Current Server';
$lang['commonDirName'] = 'Directory Name';
$lang['commonDirDescribe'] = 'Directory Description';
$lang['commonStateOptimized'] = 'Best State';
$lang['commonStateCurrent'] = 'Current State';
$lang['commonDirAttach'] = 'Attachment Directory';
$lang['commonDirUserface'] = 'User Avatar Store Directory';
$lang['commonDirCache'] = 'Cache Directory';
$lang['commonDirTemplate'] = 'Template Directory';
$lang['commonDirTemplateCache'] = 'Template Cache Directory';
$lang['commonDirSysData'] = 'System Data Directory';
$lang['commonDirSysPlugin'] = 'Plugin Directory';
$lang['commonFileConfig'] = 'Profile';
$lang['commonFileLogo'] = 'LOGO file';
$lang['commonUnsupport'] = 'Unsupported';
$lang['commonSupport'] = 'Supported';
$lang['commonWriteable'] = 'Writable';
$lang['commonNotWriteable'] = 'Unwritable';
$lang['commonUnlimited'] = 'Unlimited';
$lang['commonAllow'] = 'Allowed';
$lang['commonDirPower'] = 'Directory Permissions';
$lang['commonFilePower'] = 'File Permissions';
$lang['commonSetupOption'] = 'Configure Options';
$lang['commonSetupParameterValue'] = 'Parameter Value';
$lang['commonSetupComment'] = 'Notes';
$lang['commonInfotip'] = 'Prompt Message';
$lang['commonFailed'] = 'Failed';
$lang['commonSuccess'] = 'Success';


//Setup Step Title
$lang['commonLicenseInfo']='Copyright';
$lang['commonSystemCheck']='Check configuration';
$lang['commonDatabaseSetup']='Setup database';
$lang['commonAdministratorSetup']='Set administrator';
$lang['commonCreateDataTable']='Create data table';
$lang['commonInstallComplete']='Installation complete';

//Setup Common Tip
$lang['tipAlreadyInstall'] = '&#x60A8;&#x5DF2;&#x7ECF;&#x5B89;&#x88C5;&#x8FC7;HDWiki &#x7CFB;&#x7EDF;, <a href = "../"> &#x70B9;&#x51FB;&#x8FDB;&#x5165;&#x9996;&#x9875;</a> ';
$lang['tipLeftHelp'] = '<strong> Technical support: </strong><br/>Installation encounter any problems please click <span class = "red"><a href = "https://github.com/zjhxmjl/hdwiki/issues"> HDWiki Support</a></span>, your question will be answered in the first time. ';
$lang['tipGenErrInfo'] = 'Because your directory server configuration properties or reason, unable to continue with the installation HDWiki, please read the installation instructions carefully! ';

/**
 * step1
 */

//Setup Step 1
$lang['step1ReadLicense'] = 'Read the license agreement';
$lang['step1LicenseInfo'] = <<<STEP1
'Before starting the installation and use HDWiki, be sure to read this authorization document, make sure you understand and agree that after all of the following terms before proceeding with the installation and use.
		
Interactive Online (Beijing) Technology Co., Ltd. is a developer of interactive wiki product, according to the independent interactive wiki product has copyrights. Interactive Online (Beijing) Technology Co., Ltd. at http://www.hudong.com.

Interactive Wiki copyright has been registered at the National Copyright Administration of People's Republic of China, the protection of copyright laws and international conventions by. Whether the individual user or organization, profit or not, how to use (including for the purpose of study and research), are required to read the agreement carefully, understand, agree and comply with all the terms of this agreement, before beginning to use interactive dimension passenger software.

This License Agreement applies and only applies to a different version of the interactive wiki products, interactive online (Beijing) Technology Co., Ltd. has a right of final interpretation of the licensing agreement.

I. license rights agreement

1. You can use this software on the basis of fully comply with the end user license agreement, without having to pay for software copyright licensing fees.

2. You can modify the source code interactive dimension (if provided) or interface style within the constraints and limitations of the scope of this Agreement to suit your website requirements.

3. You can provide a plug, the plug belongs to the author for interactive wiki all within the constraints and limits of agreement. You can plug copyrighted provided free of charge to the interactive online (Beijing) Technology Co., Ltd., but did not promise or guarantee must have been adopted. Should the new version uses you develop plug-ins, plug-in source code is part of the label name.

4. If you need technical assistance authorized by this agreement can and interactive online (Beijing) Technology Co., Ltd. signed an agreement paid technical support, and enjoy the power to reflect and express their views, relevant comments will be used as the primary consideration, but did not necessarily promise or guarantee to be adopted. Since the time the agreement is signed, you can have in the technical support period for technical support services within the specified range by specifying the way.

5. If you have not, and interactive online (Beijing) Technology Co., Ltd. signed a paid technical support agreement authorized user, you can also enjoy the same power to reflect and comment, but did not promise or guarantee must be adopted.

II. Constraints and limitations Agreement

1. No part of this software or the associated authorization rent, sell, pledge or grant sub-licenses.

2. In any case, that regardless of the use, whether modified or landscaping, how to modify the degree, as long as the use of the whole or any part of the interactive wiki, without written permission, interactive wiki name and interactive online system at the page footer ( Beijing) Technology Co., Ltd. affiliated website (http://www.hudong.com) the link must be retained, but not remove or modify.

3. Prohibition on the basis of the whole or any part of the interactive wiki to develop any derivative version, modified version or third-party version for re-distribution.

4. If you fail to comply with the terms of this Agreement, your license will be terminated, the rights of the licensee will be withdrawn, and bear the corresponding legal responsibility.

III. Limited Warranty and Disclaimer

1. The software and accompanying documents as not to provide any form of explicit or implicit guarantee of compensation or provided.

2. User voluntary use of this software, you must understand the risks of using this software, even before purchasing products and technical services, we do not promise to provide any form of technical support, use warrant or assume any use of this software generate problems related responsibilities.

3. Interactive Online (Beijing) Technology Co., Ltd. does not use the software to build the system in the article or information on any liability.

Wiki-related interactive end-user license agreement, licensing and technical services details, by interactive wiki exclusive official website. Interactive Online (Beijing) Technology Co., Ltd. has, without prior notice, to modify the license agreement and technical services price list of powers, the revised agreement or a new price list for self-authorized users from changing the date of entry into force.

Electronic form of licensing agreement as written agreement signed by both parties as complete and legally binding equivalent. Once you start installing interactive wiki, shall be deemed to fully understand and accept the terms of this Agreement, in the enjoyment of the powers conferred by these provisions at the same time, by the relevant constraints and limitations. Acts outside the scope of the license agreement, the direct violation of the license agreement and constitutes infringement, we reserve the right to terminate the authorization, shall be ordered to stop the damage, and the powers held responsible reservations. '
STEP1;
$lang['step1Agree'] = 'Agree';
$lang['step1Disagree'] = 'Disagree';


/**
 * step2
 */
$lang['step2Tip'] = '<div class="log"> Prompt Message </div> <div class = "mes"><p>
<ul>
<li>The archive of all files in the directory and HDWiki directory to upload to the server.</li>
<li>If you are using a non-Windows system, modify the following properties:</li>
</ul>
<ol><li>./uploads attachment directory permissions for 0777</li>
<li>./uploads/userface user avatar store directory permissions to 0777</li>
<li>./data Data directory permissions to 0777</li>
<li>./plugins plugin directory permissions to 0777</li>
<li>./style/default/logo.gif website Logo file permissions for 0777</li>
<li>./config.php system configuration file permissions for 0777</li>
</ol></p></div> ';
$lang['step2AttachAllowSize'] = 'Allow/Maximum Size';
$lang['step2AttachDisabled'] = 'allowed to upload attachments';
$lang['step2AttachDisabledTip'] = 'attachment upload or server-related operations are prohibited. ';
$lang['step2PHPVersionTooLowTip'] = 'Your PHP version earlier than 4.1.0, you can not use HDWiki';

/**
 * step3
 */
$lang['step3IsNull'] = '请返回并输入所有选项。';
$lang['step3DBPrefix'] = '数据表前缀';
$lang['step3NoConnDB'] = '无法连接到数据库，请确认MySQL地址、用户名、密码和数据库名都正确无误。';
$lang['step3DBNoPower'] = '您无权建立数据库！';
$lang['step3DBConfigWriteErrorTip'] = '安装程序无法写入系统核心配置文件, 请修改配置文件./config.php权限！';
$lang['step3DBConfigNotWriteTip'] = './config.php文件不可写，请修改为可写！';
$lang['step3MySQLExtErrorTip'] = '不支持MySQL扩展！';
$lang['step3Tip'] = '<div class = "log"> Prompt Message </div><div class = "mes"><p> Please fill in the following information in your database account,usually no need to modify Red option content. </P></div>';
$lang['step3MySqlHost'] = 'DB server';
$lang['step3MySqlHostComment'] = 'MySQL database server address,usually localhost:3306';
$lang['step3MySqlUser'] = 'DB username';
$lang['step3MySqlUserComment'] = 'MySQL database username';
$lang['step3MySqlPass'] = 'DB password';
$lang['step3MySqlPassComment'] = 'MySQL database password';
$lang['step3MySqlDBName'] = 'DB name';
$lang['step3MySqlDBNameComment'] = 'database name(if the database does not exist, create!)';
$lang['step3MySqlDBTablePrefix'] = 'Table Name Prefix';
$lang['step3MySqlDBTablePrefixComment'] = 'when installing multiple HDWiki with same database can change';
$lang['step3MySqlVersionToLowTip'] = '您的MySQL版本低于3.23, 由于程序没有经过此平台的测试, 建议您换 MySQL4或MySQL5 的数据库服务器！';
$lang['step3DBAlreadyExist'] = 'Database already installed HDWiki, continue the installation will clear the original data.';
$lang['step3DBDropTableConfirm'] = 'Continue the installation will clear all of the original data, you sure you want to continue?';

/**
 * step4
 */
$lang['step4Tip'] = 'Set the Administrator account';
$lang['step4AdministratorNick'] = 'Admin Nickname';
$lang['step4AdministratorNickComment'] = 'Chinese or English can be used';
$lang['step4AdministratorEmail'] = 'Admini Email Address';
$lang['step4AdministratorEmailComment'] = 'E-mail, be sure to fill in the correct and effective address.';
$lang['step4AdministratorPass'] = 'Admini Password';
$lang['step4AdministratorPassComment'] = 'password length can not be less than 6 and case sensitive.';
$lang['step4AdministratorRePass'] = 'Confirm Password';
$lang['step4AdministratorRePassComment'] = 'Please re-enter a password,confirm.';
$lang['step4AdministratorPassTooShortTip'] = '管理员密码至少是6个字符，建议使用英文和符号混合。';
$lang['step4AdministratorPassNotSame'] = '两次输入的密码不相同';
$lang['step4AdministratorEmailInvalid'] = '管理员Email地址不合法！';
$lang['step4ImportDefaultData'] = 'Importing default data';
$lang['step4DefaultSiteName'] = 'My HDWiki';
$lang['step4DefaultCategory'] = '默认分类';
$lang['step4Index'] = '首页';
$lang['step4Wikier'] = '维客';
$lang['step4Help'] = '帮助';
$lang['step4AnonymityUser'] = '匿名用户';
$lang['step4DocBaseInfo'] = '词条基本信息';
$lang['step4DocCatalog'] = '词词条录';
$lang['step4DocCreator'] = '词条创建者';
$lang['step4DocLatestEdit'] = '词条最后编辑';
$lang['step4SplitTags'] = '拆分Tag';
$lang['step4UpdateIndex'] = '更新首页';
$lang['step4DBExecError'] = '数据库执行错误:';


$lang['styleName1']='默认风格';
$lang['styleName2']='绿色心情';
$lang['styleName3']='血色浪漫';
$lang['styleName4']='金色年华';
$lang['styleName5']='黑色幽默';
$lang['styleName6']='白璧无瑕';
$lang['styleName7']='紫微高照';


$lang['langName1']='简体中文';
$lang['langName2']='繁體中文';
$lang['langName3']='English';

$lang['stepSetupDelInstallDirTip'] = '<div class="log">Prompt Message</div><div class="mes"><p>Please delete the entire install directory as soon as possible or the install.php renamed to avoid malicious use of others.</p></div>';
$lang['stepSetupSuccessTip'] = 'Congratulations!HDWiki installed Successfully！';
$lang['stepSetupGoTOIndex'] = 'Go home and See first！';

$lang['shortOpenTagInvalid'] = '&#x5BF9;&#x4E0D;&#x8D77;,&#x8BF7;&#x5C06; php.ini &#x4E2D;&#x7684; short_open_tag &#x8BBE;&#x7F6E;&#x4E3AOn;&#x5426;&#x5219;&#x7A0B;&#x5E8F;&#x65E0;&#x6CD5;&#x6B63;&#x5E38;&#x8FD0;&#x884C;';
$lang['AddHelpDocument'] = 'Adding help documentation';
	
?>