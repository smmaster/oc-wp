FROM centos/php-73-centos7
user root
COPY .s2i/ /tmp/src/.s2i/
COPY builder/ /tmp/src/builder/
COPY trade /tmp/src/trade/
RUN /tmp/src/.s2i/bin/assemble
USER 1001
CMD  /opt/app-root/s2i/run
