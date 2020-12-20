<HTML>

<HEAD>
       <LINK REL="stylesheet" TYPE="text/css" HREF="styles.css">
</HEAD>

<BODY TEXT="black" LINK="black" ALINK="black" VLINK="black" MARGINWIDTH="0" MARGINHEIGHT="0" BGCOLOR="white">

       <TABLE BORDER="0" CELLPADDING="0" CELLSPACING="15" WIDTH="100%">
              <TR>
                     <TD COLSPAN="2">
                            <B>
                                   <P>
                                          <font color="#3975BD" size="-1" face="Arial">Troop 214</font>
                                   <P>
                                          <font color="#666666" face="Arial">Documents and Forms</font>
                            </B>
                     </TD>
              </TR>

              <TR VALIGN="top">
                     <TD><img border="0" src="images/bsa_logo.gif"></TD>

                     <TD>

                            <p style="line-height: 100%; margin-top: 1"><b>
                                          <font color="#3979BD" face="Arial">The following are documents for scouts,
                                                 scouters, and parents</font>
                                   </b></p>
                            <p style="line-height: 100%; margin-top: 1">
                                   <font face="Arial">The following is a list of useful scouting documents
                                          provided by the troop webmaster and sources.
                            </p>


                            <%' Runtime code: Dim strPath 'Path of directory to show
                Dim objFSO    ' FileSystemObject variable Dim objFolder 'Folder variable
                Dim objItem   ' Variable used to loop through the contents of the folder ' A recordset object variable and some selected constants from adovbs.inc.
                ' U for the sorting code. Dim rstFiles Const adVarChar=200 Const adInteger=3 Const adDate=7
                                   strPath="documents/troop" ' Create the FSO
                Set objFSO = Server.CreateObject("Scripting.FileSystemObject")
                
                ' Get a handle on our folder Set objFolder=objFSO.GetFolder(Server.MapPath(strPath)) ' In order to be able to sort them easily and still close the FSO relatively
                ' quickly I'm going to make use of an ADO Recordset object with no attached ' datasource.  While it does have a slightly greater overhead then an array
                ' or dictionary object, it gives us named access to the fields and has built ' in sorting functionality.
                Set rstFiles = Server.CreateObject("ADODB.Recordset")
                rstFiles.Fields.Append "name", adVarChar, 255
                rstFiles.Fields.Append "size", adInteger
                rstFiles.Fields.Append "date", adDate
                rstFiles.Fields.Append "type", adVarChar, 255
                rstFiles.Open
                
                For Each objItem In objFolder.Files
                	rstFiles.AddNew
                	rstFiles.Fields("name").Value = objItem.Name
                	rstFiles.Fields("size").Value = objItem.Size
                	rstFiles.Fields("date").Value = objItem.DateLastModified
                	rstFiles.Fields("type").Value = objItem.Type
                Next ' objItem ' All done!  Kill off our File System Object variables.
                Set objItem = Nothing
                Set objFolder = Nothing
                Set objFSO = Nothing
                
                ' Now we can sort our data and display it: ' Sort ascending by size and secondarily descending by date
                ' (by date is mainly for illustration since all our files '  are different sizes)
                rstFiles.Sort = "name ASC"

                If Not rstFiles.EOF then

                rstFiles.MoveFirst
                
                       %><p><br><b>Troop 214 Documents and Forms:</b></p><%

                Do While Not rstFiles.EOF
                           position1=InStr(rstFiles.Fields("name").Value,"_")+1
                           if position1=0 then position1=1
                           position2 = (Len(rstFiles.Fields("name").Value)-4)-position1+1%>
                  	        <p><A href="<%= strPath & rstFiles.Fields("name").Value %>" TARGET="_blank"><%= Replace(Mid(rstFiles.Fields("name").Value,position1,position2),"_"," ") %></a>
                           <%rstFiles.MoveNext
                Loop
                
                ' Close our ADO Recordset object End If rstFiles.Close Set rstFiles=Nothing strPath="./documents/bsa" ' Create the FSO
                Set objFSO = Server.CreateObject("Scripting.FileSystemObject")
                
                ' Get a handle on our folder Set objFolder=objFSO.GetFolder(Server.MapPath(strPath)) ' In order to be able to sort them easily and still close the FSO relatively
                ' quickly I'm going to make use of an ADO Recordset object with no attached ' datasource.  While it does have a slightly greater overhead then an array
                ' or dictionary object, it gives us named access to the fields and has built ' in sorting functionality.
                Set rstFiles = Server.CreateObject("ADODB.Recordset")
                rstFiles.Fields.Append "name", adVarChar, 255
                rstFiles.Fields.Append "size", adInteger
                rstFiles.Fields.Append "date", adDate
                rstFiles.Fields.Append "type", adVarChar, 255
                rstFiles.Open
                
                For Each objItem In objFolder.Files
                	rstFiles.AddNew
                	rstFiles.Fields("name").Value = objItem.Name
                	rstFiles.Fields("size").Value = objItem.Size
                	rstFiles.Fields("date").Value = objItem.DateLastModified
                	rstFiles.Fields("type").Value = objItem.Type
                Next ' objItem ' All done!  Kill off our File System Object variables.
                Set objItem = Nothing
                Set objFolder = Nothing
                Set objFSO = Nothing
                
                ' Now we can sort our data and display it: ' Sort ascending by size and secondarily descending by date
                ' (by date is mainly for illustration since all our files '  are different sizes)
                rstFiles.Sort = "name ASC"

                If Not rstFiles.EOF then

                rstFiles.MoveFirst
                
                       %><p><br><b>Official BSA Documents and Forms:</b></p><%

                Do While Not rstFiles.EOF
                           position1=InStr(rstFiles.Fields("name").Value,"_")+1
                           if position1=0 then position1=1
                           position2 = (Len(rstFiles.Fields("name").Value)-4)-position1+1%>
                  	        <p><A href="<%= strPath & rstFiles.Fields("name").Value %>" TARGET="_blank"><%= Replace(Mid(rstFiles.Fields("name").Value,position1,position2),"_"," ") %></a>
                           <%rstFiles.MoveNext
                Loop
                
                ' Close our ADO Recordset object End If rstFiles.Close Set rstFiles=Nothing strPath="documents/other/" ' Create the FSO
                Set objFSO = Server.CreateObject("Scripting.FileSystemObject")
                
                ' Get a handle on our folder Set objFolder=objFSO.GetFolder(Server.MapPath(strPath)) ' In order to be able to sort them easily and still close the FSO relatively
                ' quickly I'm going to make use of an ADO Recordset object with no attached ' datasource.  While it does have a slightly greater overhead then an array
                ' or dictionary object, it gives us named access to the fields and has built ' in sorting functionality.
                Set rstFiles = Server.CreateObject("ADODB.Recordset")
                rstFiles.Fields.Append "name", adVarChar, 255
                rstFiles.Fields.Append "size", adInteger
                rstFiles.Fields.Append "date", adDate
                rstFiles.Fields.Append "type", adVarChar, 255
                rstFiles.Open
                
                For Each objItem In objFolder.Files
                	rstFiles.AddNew
                	rstFiles.Fields("name").Value = objItem.Name
                	rstFiles.Fields("size").Value = objItem.Size
                	rstFiles.Fields("date").Value = objItem.DateLastModified
                	rstFiles.Fields("type").Value = objItem.Type
                Next ' objItem ' All done!  Kill off our File System Object variables.
                Set objItem = Nothing
                Set objFolder = Nothing
                Set objFSO = Nothing
                
                ' Now we can sort our data and display it: ' Sort ascending by size and secondarily descending by date
                ' (by date is mainly for illustration since all our files '  are different sizes)
                rstFiles.Sort = "name ASC"

                If Not rstFiles.EOF then

                rstFiles.MoveFirst
                
                       %><p><br><b>Other Documents and Forms:</b></p><%

                Do While Not rstFiles.EOF
                           position1=InStr(rstFiles.Fields("name").Value,"_")+1
                           if position1=0 then position1=1
                           position2 = (Len(rstFiles.Fields("name").Value)-4)-position1+1%>
                  	        <p><A href="<%= strPath & rstFiles.Fields("name").Value %>" TARGET="_blank"><%= Replace(Mid(rstFiles.Fields("name").Value,position1,position2),"_"," ") %></a>
                           <%rstFiles.MoveNext
                Loop
                
                ' Close our ADO Recordset object End If rstFiles.Close Set rstFiles=Nothing %>

                                   <hr><br>


                     </TD>
              </TR>

              <TR VALIGN="top">
                     <TD></TD>

                     <TD>
                     </TD>
              </TR>
       </TABLE>

</BODY>

</HTML>