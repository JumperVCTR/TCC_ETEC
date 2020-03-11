if '%METAFRAME%' == 'TRUE' goto meta


      net use * /del /yes


	net use F: \\10.8.110.10\dept$
	net use S: \\10.8.110.10\share$
        net use H: \\10.8.1.10\apps$
        net use U: \\10.8.1.10\au$ 
	net use R: \\10.8.1.24\relatorios
        net use L: \\10.8.1.10\spool$
        net use T: \\10.8.110.10\transf$
	net use x: \\10.8.110.50\projeto_themis$
	net use u: \\10.8.110.10\dept$\SUP\logística


rem cscript //nologo %logonserver%\netlogon\SEP.vbs

goto end

:meta

net use * /del /yes


net use R: \\10.8.1.24\relatorios
net use H: \\10.8.1.10\apps$


:end