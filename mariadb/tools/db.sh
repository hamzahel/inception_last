#!/bin/bash

service mysql start && mysql < /home/setupdb.sql;
