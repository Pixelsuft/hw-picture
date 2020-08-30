<?php global $sx, $sy, $fx, $fy;
c('MainForm')->x = $fx - ($sx - cursor_pos_x());
c('MainForm')->y = $fy - ($sy - cursor_pos_y());
