<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">My Trials</div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item" 
                                v-for="trial in trials" :key="trial.id" >
                            <span class="badge badge-primary float-right">
                                {{trial.created_at}}
                            </span>
                            <p>{{trial.name}}</p>
                            <p>{{trial.distance}}</p>
                            <p>{{trial.time}}</p>
                            <p>{{trial.rhythm}}</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
  data() {
    return {
      trials: {}
    }
  },
  created(){
    axios.get('/my_trials').then(({data}) => (this.trials = data));
  }
}
</script>
