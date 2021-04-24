FROM mysql:8.0.22

COPY ./sql/*.sql /docker-entrypoint-initdb.d/

ENTRYPOINT ["/entrypoint.sh"]