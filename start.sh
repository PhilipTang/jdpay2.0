datetime=`date "+%Y-%m-%d.%H%M%S"`
docker run -itd -p 7000:80 -v `pwd`:/data/app --name test-jd2-${datetime} 557c302f7402 bash > ./containerId
echo "重启已经创建完成，containerId="`cat ./containerId`