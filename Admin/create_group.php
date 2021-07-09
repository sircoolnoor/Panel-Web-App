<html>
    <head>
        <title>
            Create Group
        </title>
    </head>

    <script>
        var input = 0
        $('#groupCode').on('input',function(e) {
            
        });

        function check(){
            input = 10
            // document.getElementById("input_id").value;
        }

    </script>
    <link rel="stylesheet" href="./style.css">
    
    <body>
        <div>
            <form>
                <label for="groupCode">Group Code:</label>
                <input type='text' id='groupCode' name='groupcode'><br>
                <label for="groupName">Group Name:</label>
                <input type='text' id='groupname' name='groupname'><br>
                <label for="projectTitle">Project Title:</label>
                <input type='text' id='projectTitle' name='projectTitle'><br>
                <label for="Program">Program:</label>
                <input type='text' id='program' name='program'><br>
                <label for="specialization">Specialization:</label>
                <input type='text' id='specialization' name='specialization'><br>
            </form>

            <form method='post'>
                <label for="totalProp">Total Proponents:</label>
                <input type="text" id="totalProp" name='totalProp' autocomplete='off' pattern='\d*' maxlength="1" onchange="check();" onkeyup="this.onchange();" value="<?php echo $_POST['totalProp'] ?? '1'; ?>" ><br>
                <button type='submit' name='submit' >Submit</button>
            </form>
                
            <label for="Proponents">Proponents:</label>
            <table>
                <tr>
                    <th>Last Name</th>
                    <th>First Name</th>
                    <th>Middle Initial</th>
                </tr>
                <?php
                $props = 1;
                if (isset($_POST['submit'])) {
                    $props = $_POST['totalProp'];
                }

                for ($x = 0; $x < $props; $x++) {
                        echo "<tr>";
                        echo "<td>";
                        echo "<td>";
                        echo "<td>";
                        echo "</tr>";
                    }
                
                ?>
            </table>
                
            
        </div>
    </body>
