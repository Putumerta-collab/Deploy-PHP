pipeline {
    agent any

    environment {
        registry = "dpuja/deployphp"
        registryCredential = 'PUJAREPO'
        kubeConfig = credentials('kubeconfig-credentials-id')
    }

    stages {
        stage('Checkout Code') {
            steps {
                git 'https://github.com/Putumerta-collab/Deploy-PHP.git'
            }
        }

        stage('Build Docker Image') {
            steps {
                script {
                    dockerImage = docker.build registry + ":$BUILD_NUMBER"
                }
            }
        }

        stage('Push Docker Image') {
            steps {
                script {
                    docker.withRegistry('https://index.docker.io/v1/', registryCredential) {
                        dockerImage.push()
                    }
                }
            }
        }

        stage('Deploy MySQL to Kubernetes') {
            steps {
                script {
                    sh 'kubectl apply -f mysql-deployment.yaml'
                    sh 'kubectl apply -f mysql-service.yaml'
                }
            }
        }

        stage('Deploy PHP App to Kubernetes') {
            steps {
                script {
                    sh """
                    echo "$kubeConfig" > ~/.kube/config
                    kubectl apply -f php-deployment.yaml
                    kubectl apply -f php-service.yaml
                    """
                }
            }
        }
    }

    post {
        always {
            cleanWs()
        }
    }
}
