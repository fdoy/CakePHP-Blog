<?php
    if ($currentRole === 'admin') {
        echo $this->element('sidebar');
    } elseif ($currentRole === 'author') {
        echo $this->element('sidebar');
    } else {
        echo $this->element('sidebar-anon');
    }
?>