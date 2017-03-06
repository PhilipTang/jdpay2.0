containerId=`cat ./containerId`
docker stop $containerId ; docker rm $containerId
echo "删除了容器，containerId="$containerId